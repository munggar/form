<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Buku;
use App\Models\Kasir;
use App\Models\Penjualan;
use App\Models\Pembelian;
use App\Models\DetPenjualan;
use Barryvdh\DomPDF\Facade\Pdf; 
use Illuminate\support\facades\db;
use Illuminate\support\facades\Auth;

class HalamanController extends Controller
{
    public function halaman(){
        return view('halaman', [
            'dtbuku' => Buku::all(),
            'dtkasir' => Kasir::all()
        ]);
    }
    public function contact(){
        return view ('contact');
    }
    public function testimoni(){
        return view('testimonial   ', [
            'dtkasir' => Kasir::all()
        ]);
    }

    public function about(){
        return view ('about');
    }
    public function product(){
        return view('product', [
            'dtbuku' => Buku::all()
        ]);
    }
    public function bloglist(){
        return view ('bloglist');
    }
    public function admin(){
        return view ('admin.admin', [
            'dtbuku' => Buku::all()
        ]);
    }
    public function crud(){
        return view ('admin.crud', [
            'dtbuku' => Buku::all()
        ]);
    }
    public function kasir(){
        return view ('admin.kasir');
    }
    public function dtkasir(){
        return view ('admin.dtkasir', [
            'dtkasir' => Kasir::all()
        ]);
    }
    public function pelanggan(){
        return view ('admin.pelanggan', [
            'pelanggan' => Pembelian::all()
        ]);
    }
    public function buku(){
        return view('admin.buku');
    }
    public function simpanisi(Request $request){
        $validatedData = $request->validate([
            'judul' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg',
            'noisbn' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok'=>'required',
            'harga_pokok'=>'required',
            'harga_jual'=>'required',
            'diskon'=>'required',
        ]);
        $validatedData['foto'] = $request->file('foto')->store('foto_buku');

        Buku::create($validatedData);

        return redirect('crud');
    }
    public function simpankasir(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required',
            'foto' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'status_kasir' => 'required',
            'username' => 'required',
            'passwd'=>'required',
            'akses'=>'required',
        ]);
        $validatedData['foto'] = $request->file('foto')->store('foto_kasir');

        Kasir::create($validatedData);

        return redirect('crud');
    }
    public function edit(Buku $id)
    {
        return view('admin.edit',[
            'dtbuku' => $id
        ]);
    }
    public function simpanedit(Request $request, Buku $buku)
    {
        $validatedData = $request->validate([
            'judul' =>    'required',
            'foto' => 'required',
            'noisbn' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok'=>'required',
            'harga_pokok'=>'required',
            'harga_jual'=>'required',
            'diskon'=>'required',
        ]);

        Storage::delete($buku->foto);
        $validatedData['foto'] = $request->file('foto')->store('foto_buku');

        Buku::where('id', $buku->id)->update($validatedData);
        return redirect('crud');
    }
    public function single_transaksi(Buku $buku)
    {
        $id_penjualan = Penjualan::tambah_penjualan();
        DetPenjualan::tambah_det_penjualan($buku->id, $id_penjualan, 1);
        session()->forget('cart');

        return redirect('keranjang');
    }
    public function hapus(Request $request, $id){
        Buku::destroy($id);
        // $dtbuku = Buku::where('id', $request->id);

        return redirect('crud');
    }
      public function cart(){
        $cart = session('cart');
        return view('cart')->with('cart',$cart);
    }
    public function tambah_cart(Buku $buku){
        $cart = session('cart');
        if(empty($cart) || count($cart) == 0) {
            $cart[$buku->id] = [
                'judul' => $buku->judul,
                'foto' => $buku->foto,
                'harga_jual' => $buku->harga_jual,
                'diskon' => $buku->diskon,
                'jumlah' => 1
            ];
        }else {
            foreach ($cart as $item => $val) {
                if($buku->id == $item) {
                    $jumlah = $val['jumlah'] + 1;
                    $cart[$item] = [
                        'judul' => $buku->judul,
                        'foto' => $buku->foto,
                        'harga_jual' => $buku->harga_jual,
                        'diskon' => $buku->diskon,
                        'jumlah' => $jumlah
                    ];
                    break;
                } else {
                    $cart[$buku->id] = [
                        'judul' => $buku->judul,
                        'foto' => $buku->foto,
                        'harga_jual' => $buku->harga_jual,
                        'diskon' => $buku->diskon,
                        'jumlah' => 1
                    ];
                }
            }
        }
        session(['cart' => $cart]);

        notify()->success( 'Segera Checkout yaa', 'Telah ditambahkan ke keranjang');
        return redirect('/keranjang');

    }
        public function hapuscart1(Buku $buku){
            $cart = session('cart');
            unset($cart[$buku->id]);
            session(['cart' => $cart] );

            notify()->success( 'Telah dihapus dari keranjang', 'Success!');
            return redirect('/keranjang');
        }
        public function hapus_cart(){
            $cart = session('cart');
            session()->forget('cart');
            // unset($cart);
            notify()->success( 'Keranjang Telah dibersihkan!', 'Berhasil!');
            return redirect('/keranjang');
        }
        public function tambah_transaksi(){
            $cart = session('cart');
            $id_penjualan = Penjualan::tambah_penjualan();
            foreach ($cart as $item => $val) {
                DetPenjualan::tambah_det_penjualan($item, $id_penjualan, $val['jumlah']);
            }
            session()->forget('cart');

            notify()->success( 'Semoga nyaman dengan pelayanan kami!', 'Terima kasih!');
            return redirect('/keranjang');
        }
        public function checkout(Buku $id)
        {
            $cart = session('cart');
            $product = $cart[$id->id];
            return view('checkout',[
                'dtbuku' => $id,
                'jumlah' => $product['jumlah']
            ]);
        }
        public function simpancheckout(Request $request, Pembelian $buku, $id){
            // dd($data->id_penjualan);
            $p = Penjualan::create([
                'id_kasir' => Auth::user()->id,
                'tanggal'=> date('Y-m-d'),
            ]);
            $data = Penjualan::orderBy('id_penjualan','desc')->first();
            DetPenjualan::create([
                'id_penjualan' => $data->id_penjualan,
                'id_buku' => $id,
                'jumlah' => $request->jumlah
            ]);
            $validatedData = $request->validate([
                'nama' =>    'required',
                'alamat' => 'required',
                'telp' => 'required',
                'jumlah' => 'required'
            ]);
            $buku = Buku::where('id', $id)->first();
            // $validatedData['buku_id'] = $buku->id;
            // Pembelian::create($validatedData);
            Pembelian::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                'jumlah' => $request->jumlah,
                'penjualan_id' => $data->id_penjualan,
                'buku_id' => $buku->id
            ]);

            if($request->jumlah > $buku->stok) {
                notify()->error('Stok tidak tersedia', 'Error!');
                return redirect()->back();
            } else {
                Buku::where('id', $id)->update([
                    'stok' => $buku->stok - $request->jumlah
                ]);
            }
            notify()->success( 'Semoga anda nyaman dengan pelayanan kami!', 'Terima kasih!');

            $buku = Buku::where('id',$buku->id)->first();
            $pembelian = Pembelian::where('penjualan_id',$data->id_penjualan)->first();
            $jumlah = $request->jumlah;
            // dd($buku);
            return view('cetakfaktur')->with( ['buku' => $buku, 'pembelian' => $pembelian, 'jumlah' => $jumlah]);
        }
        public function cetakfaktur(){
            $pdf = PDF::loadview('/cetakfaktur');
            return $pdf->download('struk-pembelian-pdf');
        }
        public function cetak_pdf(){

        }
}
