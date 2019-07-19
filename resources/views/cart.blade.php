@extends('layouts.app2')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
	<div class="hidden">
		{{$total =0}}
	</div>
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
						@if(count($registers))
							@foreach($registers->all() as $register)
							<div class="hidden">
								{{$data =10}}
								{{$course = App\Course::find($register->courseID)}}
								{{$total = $total + $register->price - $course->discount}}
							</div>
								<tr>
									<td data-th="Product">
										<div class="row">
											<div class="col-sm-2 hidden-xs"><img src="img/portfolio/{{$course->img}}" alt="..." class="img-responsive"/></div>
											<div class="col-sm-10">
												<h4 class="nomargin">{{$register->course}}</h4>
												<p>{{$course->description}}</p>
											</div>
										</div>
									</td>
									<td data-th="Price">{{$register->price}} zł</td>
									<td data-th="Subtotal" class="text-center">
									@if($course->discount>0)
										-{{$course->discount}}
									@else
										BRAK
									@endif
									</td>
									<td class="" data-th="">
										<form method="post" action="{{route('register.delete')}}">
											{{ csrf_field() }}
											<input type="hidden" name="id" value="{{$register->id}}">
											<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
										</form>
									</td>
								</tr>
							@endforeach
						@else
							PUSTO TU TROCHĘ
						@endif

					</tbody>
					<tfoot>
						<div class="hidden">
							{{$user = App\User::find(Auth::user()->id)}}
							{{$total = $total - $user->discount}}
							{{$transactionID = $total*69}}
							@if($total<'0')
								{{$total=0}}
							@endif
							</div>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total {{$total}} zł</strong></td>
						</tr>
						<tr>
							<!-- <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Kontynuuj Zakupy</a></td> -->
							<td colspan="2" class="hidden-xs"></td>
              <td colspan="1" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Rabat użytkownika:
							@if($user->discount>0)
								{{$user->discount}}
							@else
								0
							@endif
							 zł</strong></td>
							<td class="hidden-xs text-center"><strong>Łącznie: {{$total}} zł</strong></td>
							<td>
								<form method="get" action="{{route('register.transaction', [$transactionID])}}">
									<input type="hidden" name="userID" value="{{$user->id}}">
									<input type="hidden" name="total" value="{{$total}}">
									<input type="hidden" name="transactionID" value="{{$transactionID}}">
									<button class="btn btn-success btn-block" type="submit">Zapłać <i class="fa fa-angle-right"></i></button>
								</form>
							</td>
						</tr>
					</tfoot>
				</table>
</div>

@endsection
