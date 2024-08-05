@extends('layouts.dashboard')
@section('title', $title)

@section('content')
<div class="dashboard-content">
    <div class="container-xl">
        <div class="dashboard-row row">
            <!-- Bagian Kiri: Ringkasan dan Grafik -->
            <aside class="col-lg-8 dashboard-main-content">
                <!-- Dashboard Overview -->
                <section class="dashboard-overview">
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h2 class="text-primary"><i class="fa-solid fa-wallet"></i></h2>
                                        <div>
                                            <span class="px-2 py-1 indicator-danger">
                                                50%
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="card-title">Total Saldo</h6>
                                    <h4 class="card-text" style="white-space:nowrap; text-overflow:ellipsis; overflow:hidden;">Rp. 12.000.000</h4>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-4 mb-1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h2 class="text-success"><i class="fa-solid fa-money-bills"></i></h2>
                                        <div>
                                            <span class="px-2 py-1 indicator-danger">
                                                37%
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="card-title">Pemasukan</h6>
                                    <h4 class="card-text">Rp. 547.000</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-md-4 mb-1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h2 class="text-danger"><i class="fa-solid fa-paper-plane"></i></h2>
                                        <div>
                                            <span class="px-2 py-1 indicator-safe">
                                                12%
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="card-title">Pengeluaran</h6>
                                    <h4 class="card-text">Rp. 706.000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="transaction mb-1">
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-center">
                                        <div>
                                            <h1><i class="fa-solid fa-user"></i></h2>
                                            <h6 class="card-title">Total Worker</h6>
                                        </div>
                                        <div style="margin: 0;" class="d-flex flex-column justify-content-center text-center">
                                            <h1 style="margin: 0; line-height: 2.75rem" class="card-text">23</h1>
                                            <p style="font-size: small;" class="text-grey">Orang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Card 2 -->
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-center">
                                        <div>
                                            <h1><i class="fa-solid fa-computer"></i></h2>
                                            <h6 class="card-title">Total Admin</h6>
                                        </div>
                                        <div style="margin: 0;" class="d-flex flex-column justify-content-center text-center">
                                            <h1 style="margin: 0; line-height: 2.75rem" class="card-text">30</h1>
                                            <p style="font-size: small;" class="text-grey">Orang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Charts Section -->
                <section class="charts-section mb-3 text-light">
                    <div class="row">
                        <!-- Chart 1 -->
                        <div class="col-lg-12">
                            <div class="card mb-1">
                                <div class="card-header">
                                    <h6 class="card-title">Statistik Absensi</h6>
                                </div>
                                <div class="card-body">
                                    <div id="chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Table Section -->
                <section class="table-section">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Riwayat Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ORD12345</td>
                                        <td>John Doe</td>
                                        <td>2024-08-01</td>
                                        <td>Completed</td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ORD12346</td>
                                        <td>Jane Smith</td>
                                        <td>2024-08-02</td>
                                        <td>Pending</td>
                                        <td>$234.56</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </aside>

            <!-- Bagian Kanan: Dua Card Atas-Bawah -->
            <div class="col-lg-4 dashboard-secondary-content">
                <!-- Card 1 -->
                <div class="card mb-2" style="height: 75%">
                    <div class="card-header">
                        <h6 class="card-title">Top Staff</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Here you can put recent orders or any other relevant information.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card mt-4" style="height:55%">
                    <div class="card-header mt-2">
                        <h6 class="card-title">Statistik Keuangan</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Here you can put quick stats or any other relevant information.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    fetch('/api/absen-data')
        .then(response => response.json())
        .then(data => {
            console.log('Data received:', data); // Cek format data

            var options = {
                series: data.series,
                chart: {
                    type: 'area',
                    height: 350,
                    zoom: {
                        type: 'x',
                        enabled: true,
                        autoScaleYaxis: true
                    },
                    toolbar: {
                        autoSelected: 'zoom'
                    },
                    background: '#1a1a1a;', // Background chart
                },
                dataLabels: {
                    enabled: false
                },
                markers: {
                    size: 0,
                },
                title: {
                    text: 'Absensi',
                    align: 'left',
                    style: {
                        color: '#fff' // Title color
                    }
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        inverseColors: false,
                        opacityFrom: 0.7,
                        opacityTo: 0,
                        stops: [0, 90, 100]
                    },
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#fff' // Y-axis labels color
                        },
                        formatter: function (val) {
                            return val; // Format labels if needed
                        },
                    },
                    title: {
                        text: 'Jumlah',
                        style: {
                            color: '#fff' // Y-axis title color
                        }
                    },
                },
                xaxis: {
                    categories: data.categories,
                    labels: {
                        style: {
                            colors: '#fff' // X-axis labels color
                        },
                        formatter: function (val) {
                            return new Date(val).toLocaleDateString(); // Format date if needed
                        }
                    },
                    type: 'datetime',
                },
                tooltip: {
                    theme: 'dark', // Tooltip theme
                    x: {
                        format: 'dd MMM yyyy'
                    },
                },
                grid: {
                    borderColor: '#444' // Grid lines color
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left',
                    labels: {
                        colors: '#fff' // Legend text color
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        })
        .catch(error => console.error('Error fetching data:', error));
});


</script>
@endsection
