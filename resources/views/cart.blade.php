@extends('layouts.app2')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:70%">Produkt</th>
							<th style="width:10%">Cena</th>
							<th style="width:10%" class="text-center">Zniżka</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Szkolenie 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price">199,99 zł</td>
							<td data-th="Subtotal" class="text-center">-19,99 zł</td>
							<td class="actions" data-th="">
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 199,99 zł</strong></td>
						</tr>
						<tr>
							<!-- <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Kontynuuj Zakupy</a></td> -->
							<td colspan="2" class="hidden-xs"></td>
              <td colspan="1" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Łącznie 199,99 zł</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Zapłać <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

@endsection
