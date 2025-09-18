<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Data untuk cards
        $countProduct = DB::table('produk')->count();
        $countUser = User::count();
        $countCustomer = DB::table('pelanggan')->count();
        
        // Total penjualan (dalam jumlah uang)
        $totalAmount = DB::table('penjualan')
            ->join('detail_penjualan', 'penjualan.PenjualanID', '=', 'detail_penjualan.PenjualanID')
            ->join('produk', 'detail_penjualan.ProdukID', '=', 'produk.ProdukID')
            ->select(DB::raw('SUM(detail_penjualan.JumlahProduk * produk.Harga) as total'))
            ->value('total') ?? 0;

        // Data untuk chart bulanan
        $monthlyTransactions = DB::table('penjualan')
            ->join('detail_penjualan', 'penjualan.PenjualanID', '=', 'detail_penjualan.PenjualanID')
            ->join('produk', 'detail_penjualan.ProdukID', '=', 'produk.ProdukID')
            ->select(
                DB::raw('MONTH(TanggalPenjualan) as month'),
                DB::raw('SUM(detail_penjualan.JumlahProduk * produk.Harga) as total')
            )
            ->whereYear('TanggalPenjualan', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Ubah bulan ke format nama bulan
        $months = $monthlyTransactions->map(fn($t) => Carbon::create()->month($t->month)->format('F'));
        $totals = $monthlyTransactions->pluck('total');

        // Data penjualan hari ini (dalam unit)
        $today = date('Y-m-d');
        $todaySales = DB::table('penjualan')
            ->join('detail_penjualan', 'penjualan.PenjualanID', '=', 'detail_penjualan.PenjualanID')
            ->whereDate('TanggalPenjualan', $today)
            ->sum('JumlahProduk');

        // Data total penjualan (dalam unit)
        $totalSales = DB::table('detail_penjualan')
            ->sum('JumlahProduk');

        return view('dashboard', compact(
            'countProduct',
            'countUser',
            'countCustomer',
            'totalAmount',
            'months',
            'totals',
            'todaySales',
            'totalSales'
        ));
    }
}
