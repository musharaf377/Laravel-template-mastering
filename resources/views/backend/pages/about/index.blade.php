
@extends('backend.layouts.app')

@section('title', $title)


@section('content')

<div class="col-xs-12 main">
    <div class="page-on-top">
        <!-- tables/default -->
        <div class="row m-b-20">
            <div class="col-xs-12">
                <div class="widget">
                    <div class="row m-b-20">
                        <div class="col-xs-12">
                            <p class="color-grey-900 m-b-5">{{ $page_title }}</p>
                            <p class="color-grey-700 text-sm m-b-10">Use the <code>.table</code> class for default table
                                styling. Add the <code>.table-hover</code> for styled hover behaviour.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Ticker</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Apple Inc.</td>
                                            <td>AAPL</td>
                                            <td>115.52</td>
                                        </tr>
                                        <tr>
                                            <td>Google Inc.</td>
                                            <td>GOOG</td>
                                            <td>635.30</td>
                                        </tr>
                                        <tr>
                                            <td>Microsoft Corporation</td>
                                            <td>MSFT</td>
                                            <td>46.74</td>
                                        </tr>
                                        <tr>
                                            <td>LinkedIn Corp</td>
                                            <td>LNKD</td>
                                            <td>190.04</td>
                                        </tr>
                                        <tr>
                                            <td>Facebook Inc.</td>
                                            <td>FB</td>
                                            <td>94.30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class="row m-b-20">
                        <div class="col-xs-12">
                            <p class="color-grey-900 m-b-5">Striped table</p>
                            <p class="color-grey-700 text-sm m-b-10">Use the <code>.table-striped</code> class for
                                striped table rows</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="badge badge-40">
                                                <span class="tag tag-rounded tag-primary">1</span>
                                                <img src="../../../../assets/faces/w1.png" class="max-w-40 img-circle"
                                                    alt="badge">
                                            </div>
                                        </td>
                                        <td>Lucas smith</td>
                                        <td>Australia</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="badge badge-40">
                                                <span class="tag tag-rounded tag-secondary">2</span>
                                                <img src="../../../../assets/faces/w2.png" class="max-w-40 img-circle"
                                                    alt="badge">
                                            </div>
                                        </td>
                                        <td>Janet Abshire</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="badge badge-40">
                                                <span class="tag tag-rounded tag-info">3</span>
                                                <img src="../../../../assets/faces/w3.png" class="max-w-40 img-circle"
                                                    alt="badge">
                                            </div>
                                        </td>
                                        <td>Lucas Koch</td>
                                        <td>England</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="badge badge-40">
                                                <span class="tag tag-rounded tag-success">4</span>
                                                <img src="../../../../assets/faces/w4.png" class="max-w-40 img-circle"
                                                    alt="badge">
                                            </div>
                                        </td>
                                        <td>Gladys Schuster</td>
                                        <td>USA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class="row m-b-20">
                        <div class="col-xs-12">
                            <p class="color-grey-900 m-b-5">Bordered table</p>
                            <p class="color-grey-700 text-sm m-b-10">Use the <code>.table-bordered</code> class for
                                bordered table rows</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Ticker</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Apple Inc.</td>
                                            <td>AAPL</td>
                                            <td>115.52</td>
                                        </tr>
                                        <tr>
                                            <td>Google Inc.</td>
                                            <td>GOOG</td>
                                            <td>635.30</td>
                                        </tr>
                                        <tr>
                                            <td>Microsoft Corporation</td>
                                            <td>MSFT</td>
                                            <td>46.74</td>
                                        </tr>
                                        <tr>
                                            <td>LinkedIn Corp</td>
                                            <td>LNKD</td>
                                            <td>190.04</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class="row m-b-20">
                        <div class="col-xs-12">
                            <p class="color-grey-900 m-b-5">Unbordered table</p>
                            <p class="color-grey-700 text-sm m-b-10">Use the <code>.table-unbordered</code> class for
                                tables without borders</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-unbordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Ticker</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Apple Inc.</td>
                                            <td>AAPL</td>
                                            <td>115.52</td>
                                        </tr>
                                        <tr>
                                            <td>Google Inc.</td>
                                            <td>GOOG</td>
                                            <td>635.30</td>
                                        </tr>
                                        <tr>
                                            <td>Microsoft Corporation</td>
                                            <td>MSFT</td>
                                            <td>46.74</td>
                                        </tr>
                                        <tr>
                                            <td>LinkedIn Corp</td>
                                            <td>LNKD</td>
                                            <td>190.04</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class="row m-b-20">
                        <div class="col-xs-12">
                            <p class="color-grey-900 m-b-5">Condensed table</p>
                            <p class="color-grey-700 text-sm m-b-10">Use the <code>.table-condensed</code> class for
                                condensed tables</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Ticker</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Apple Inc.</td>
                                            <td>AAPL</td>
                                            <td>115.52</td>
                                        </tr>
                                        <tr>
                                            <td>Google Inc.</td>
                                            <td>GOOG</td>
                                            <td>635.30</td>
                                        </tr>
                                        <tr>
                                            <td>Microsoft Corporation</td>
                                            <td>MSFT</td>
                                            <td>46.74</td>
                                        </tr>
                                        <tr>
                                            <td>LinkedIn Corp</td>
                                            <td>LNKD</td>
                                            <td>190.04</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tables/default -->
    </div>
</div>

@endsection
