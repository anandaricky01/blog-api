<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        td,
        th {
            font-size: 11px;
        }
    </style>


    <title>TES - Venturo Camp Tahap 2</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card" style="margin: 2rem 0rem;">
            <div class="card-header">
                Venturo - Laporan penjualan tahunan per menu
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <select id="my-select" class="form-control" name="tahun">
                                    <option value="">Pilih Tahun</option>
                                    <option value="2021" {{ Request::has('tahun') ? request('tahun') == '2021' ? 'selected' : '' : '' }}>2021</option>
                                    <option value="2022" {{ Request::has('tahun') ? request('tahun') == '2022' ? 'selected' : '' : '' }}>2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Tampilkan
                            </button>
                            <a href="http://tes-web.landa.id/intermediate/menu" target="_blank" rel="Array Menu" class="btn btn-secondary">
                                Json Menu
                            </a>
                            <a href="http://tes-web.landa.id/intermediate/transaksi?tahun=2021" target="_blank" rel="Array Transaksi" class="btn btn-secondary">
                                Json Transaksi
                            </a>
                        </div>
                    </div>
                </form>
                <hr>
                @if (Request::has('tahun'))
                {{-- {{ substr($transaksi[0]->tanggal,5,2) }} --}}
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" style="margin: 0;">
                            <thead>
                                <tr class="table-dark">
                                    <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu</th>
                                    <th colspan="12" style="text-align: center;">Periode Pada 2021
                                    </th>
                                    <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total</th>
                                </tr>
                                <tr class="table-dark">
                                    <th style="text-align: center;width: 75px;">Jan</th>
                                    <th style="text-align: center;width: 75px;">Feb</th>
                                    <th style="text-align: center;width: 75px;">Mar</th>
                                    <th style="text-align: center;width: 75px;">Apr</th>
                                    <th style="text-align: center;width: 75px;">Mei</th>
                                    <th style="text-align: center;width: 75px;">Jun</th>
                                    <th style="text-align: center;width: 75px;">Jul</th>
                                    <th style="text-align: center;width: 75px;">Ags</th>
                                    <th style="text-align: center;width: 75px;">Sep</th>
                                    <th style="text-align: center;width: 75px;">Okt</th>
                                    <th style="text-align: center;width: 75px;">Nov</th>
                                    <th style="text-align: center;width: 75px;">Des</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-secondary" colspan="14"><b>Makanan</b></td>
                                </tr>
                                @php
                                    $total = [];
                                @endphp
                                @foreach ($menu as $me)
                                    @if ($me->kategori == 'makanan')
                                        <tr>
                                            <td>{{ $me->menu }}</td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[0] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '01' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[0] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[0]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[1] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '02' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[1] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[1]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[2] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '03' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[2] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[2]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[3] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '04' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[3] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[3]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[4] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '05' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[4] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[4]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[5] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '06' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[5] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[5]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[6] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '07' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[6] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[6]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[7] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '08' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[7] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[7]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[8] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '09' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[8] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[8]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[9] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '10' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[9] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[9]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[10] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '11' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[10] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[10]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[11] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '12' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[11] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[11]) }}
                                            </td>

                                            <td style="text-align: right;"><b>{{ currency_IDR( array_sum($total)) }}</b></td>
                                        </tr>
                                    @endif
                                @endforeach
                                <tr>
                                    <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                                </tr>
                                @php
                                    $total = [];
                                @endphp
                                @foreach ($menu as $me)
                                    @if ($me->kategori == 'minuman')
                                        <tr>
                                            <td>{{ $me->menu }}</td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[0] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '01' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[0] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[0]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[1] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '02' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[1] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[1]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[2] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '03' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[2] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[2]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[3] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '04' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[3] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[3]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[4] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '05' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[4] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[4]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[5] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '06' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[5] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[5]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[6] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '07' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[6] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[6]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[7] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '08' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[7] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[7]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[8] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '09' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[8] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[8]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[9] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '10' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[9] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[9]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[10] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '11' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[10] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[10]) }}
                                            </td>
                                            <td style="text-align: right;">
                                                @php
                                                    $total[11] = 0;
                                                @endphp
                                                @foreach ($transaksi as $trans)
                                                    @if (substr($trans->tanggal, 5, 2) == '12' && $trans->menu == $me->menu )
                                                        @php
                                                            $total[11] += $trans->total;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ currency_IDR($total[11]) }}
                                            </td>

                                            <td style="text-align: right;"><b>{{ currency_IDR( array_sum($total)) }}</b></td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            @if (Request::has('tahun'))
                <div class="row m-3">
                    @if (isset($menu))
                    <div class="col-6"><h4>Isi Json Menu</h4><pre style="height: 400px; background:#eaeaea;">
                    @php
                        var_dump($menu);
                    @endphp
                    </pre></div>
                    @endif
                    @if (isset($transaksi))
                    <div class="col-6"><h4>Isi Json Transaksi</h4><pre style="height: 400px; background:#eaeaea;">
                    @php
                        var_dump($transaksi);
                    @endphp</pre></div>
                    @endif
                </div>
            @endif

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>
