@extends('layouts.master')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			@include('layouts.includes._message')
			<!--begin::Card-->
			<div class="card card-custom">
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title">
						<h3 class="card-label">Obat
						<span class="d-block text-muted pt-2 font-size-sm">Data obat</span></h3>
					</div>
					<div class="card-toolbar">
						<!--begin::Dropdown-->
						<div class="dropdown dropdown-inline mr-2">
							<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
										<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>Export</button>
							<!--begin::Dropdown Menu-->
							<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
								<!--begin::Navigation-->
								<ul class="navi flex-column navi-hover py-2">
									<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-print"></i>
											</span>
											<span class="navi-text">Print</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-copy"></i>
											</span>
											<span class="navi-text">Copy</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-file-excel-o"></i>
											</span>
											<span class="navi-text">Excel</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-file-text-o"></i>
											</span>
											<span class="navi-text">CSV</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-icon">
												<i class="la la-file-pdf-o"></i>
											</span>
											<span class="navi-text">PDF</span>
										</a>
									</li>
								</ul>
								<!--end::Navigation-->
							</div>
							<!--end::Dropdown Menu-->
						</div>
						<!--end::Dropdown-->
						<!--begin::Button-->
						<!-- Button trigger modal-->
						<button type="button" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModal">
							Tambah Obat
						</button>
					</div>
				</div>
				<div class="card-body">
					<!--begin: Search Form-->
					<!--begin::Search Form-->
					<div class="mb-7">
						<div class="row align-items-center">
							<div class="col-lg-9 col-xl-8">
								<div class="row align-items-center">
									<div class="col-md-4 my-2 my-md-0">
										<div class="input-icon">
											<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
											<span>
												<i class="flaticon2-search-1 text-muted"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end::Search Form-->
					<!--end: Search Form-->
					<!--begin: Datatable-->
					<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Dosis</th>
								<th>Harga</th>
								<th>Tanggal</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($medicine as $m)
							<tr>
								<td>{{ $m->name }}</td>
								<td>{{ $m->dose }}</td>
								<td> Rp.{{ number_format ($m->price) }}</td>
								<td>{{ $m->created_at }}</td>
								<td>
									<button class="btn btn-outline-warning btn-sm btn-icon" onclick="modalEdit(
										'{{ $m->id }}',
										'{{ $m->name }}',
										'{{ $m->dose }}',
										'{{ $m->price }}',
									);"><i class="icon-sm text-warning flaticon-edit"></i></button>
									<a href="{{route ('delete.medicine',['id'=>$m->id])}}" class="btn btn-outline-danger btn-sm btn-icon">
										<i class="icon-sm text-warning flaticon-delete"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<!--end: Datatable-->
				</div>
			</div>
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
	<!-- Modal-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Obat</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<form action="{{ route('store.medicine') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="form-group">
							<label>Obat <span class="text-danger">*</span></label>
							<input name="name" type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Masukkan nama obat" value="{{ old('name') }}"/>
							@error('name')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
						<div class="form-group">
							<label>Dosis <span class="text-danger">*</span></label>
							<input name="dose" type="text" class="form-control @error('dose') is-invalid @enderror"  placeholder="Masukkan Dosis" value="{{ old('dose') }}"/>
							@error('dose')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
						<div class="form-group">
							<label>Harga <span class="text-danger">*</span></label>
							<input name="price" type="text" class="form-control @error('price') is-invalid @enderror"  value="{{ old('price') }}"placeholder="Masukkan Harga"/>
							@error('price')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary font-weight-bold">Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Edit-->
	<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalEditLabel">Edit Pasien</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<form action="{{ route('update.patient') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="modal-body">
						<input id="edit-id" name="id" type="hidden" class="form-control @error('id') is-invalid @enderror" value="{{ old('id') }}"/>
						<div class="form-group">
							<label>Nama Obat <span class="text-danger">*</span></label>
							<input id="edit-name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}"/>
							@error('name')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
						<div class="form-group">
							<label>Dosis <span class="text-danger">*</span></label>
							<input id="edit-dose" name="dose" type="text" class="form-control @error('dose') is-invalid @enderror"  value="{{ old('dose') }}"placeholder="Masukkan Tempat Lahir"/>
							@error('dose')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
						<div class="form-group">
							<label>Harga <span class="text-danger">*</span></label>
							<input id="edit-price" name="price" type="text" class="form-control @error('price') is-invalid @enderror"  value="{{ old('price') }}"placeholder="Masukkan Tempat Lahir"/>
							@error('price')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary font-weight-bold">Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--end::Button-->
</div>
<!--end::Content-->
@stop
@section('script')
<script>
	function modalEdit(
		id,
		name,
		dose,
		price
	) {
		var id = id;
		var name = name;
		var dose = dose;
		var price = price;	
		$('#modalEdit').modal('show');
		$('#edit-name').val(name)
		$('#edit-dose').val(dose)
		$('#edit-price').val(price)
		$('#edit-id').val(id)
	}
	$("#delete").click(function(e) {
		Swal.fire("Good job!");
	});
</script>
@stop