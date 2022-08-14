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
						<h3 class="card-label">Rekam Medis
						<span class="d-block text-muted pt-2 font-size-sm">Data rekam medis</span></h3>
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
							Tambah Rekam Medis
						</button>
					</div>
				</div>
				<div class="card-body">
					<!--begin: Search Form-->
					<!--begin::Search Form-->
					<div class="mb-7">
						<div class="row align-medicines-center">
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
					<table class="table table-bordered table-head-custom">
					{{-- <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"> --}}
						<thead>
							<tr>
								<th>Nama Pasien</th>
								<th>Keluhan</th>
								<th>Nama Obat</th>
								<th>Status</th>
								<th>Tanggal</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($medical_records as $medical_record)
							<tr>
								<td>{{ $medical_record->patient->name }}</td>
								<td>{{ $medical_record->complaint }}</td>
								<td>
									{{-- @json($medical_record->medical_record_medicines) --}}
									@foreach($medical_record->medical_record_medicines as $medical_record_medicines)
										<p class="mb-0">- {{ $medical_record_medicines->medicine->name }} | {{ $medical_record_medicines->dose }} | {{ $medical_record_medicines->price }}</p>
									@endforeach
								</td>
								<td>{{ $medical_record->status }}</td>
								<td>{{ $medical_record->created_at->format('d F Y H:i') }}</td>
								<td>
									<button class="btn btn-outline-warning btn-sm"><i class="icon-sm text-warning flaticon-edit"></i>Ubah</button>
									<button class="btn btn-outline-danger btn-sm"><i class="icon-sm text-danger flaticon2-trash delete" data-id="{{ $medical_record->id }}" data-action="{{ route('delete.medicine',$medical_record->id) }}" onclick="deleteConfirmation({{$medical_record->id}})"></i>hapus</button>
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
					<h5 class="modal-title" id="exampleModalLabel">Tambah Rekam Medis</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<form action="{{ route('store.record') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="form-group">
                            <label for="exampleSelect1">Pilih Pasien
                            <span class="text-danger">*</span></label>
                            <select name="patient" class="form-control" id="exampleSelect1">
								@foreach ($patients as $patient)
                                <option value="{{$patient->id}}">{{$patient->name}}</option>
							@endforeach
                            </select>
                        </div>
						<div class="form-group">
							<label>Keluhan <span class="text-danger">*</span></label>
							<input name="complaint" type="text" class="form-control @error('complaint') is-invalid @enderror"  placeholder="Masukkan Keluhan" value="{{ old('complaint') }}"/>
							@error('complaint')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
						<div id="formRepeater">
							<div id="formOrder-0">
								<label for="exampleSelect1">Pilih Obat
								  <span class="text-danger">*</span></label>
								  <div class="row no-gutters">
									<div class="col-8 pr-1">
								  <div class="form-group">
									<select name="medicines[0][medicines]" class="form-control" id="exampleSelect1">
									  <option value="">Pilih Item</option>
									  @foreach ($medicines as $med)
									  <option value="{{ $med->id }}">{{ $med->name }}</option>
									  @endforeach
									</select>
								  </div>
								</div>
								<div class="col-2 px-1">
								  <button type="button" class="btn btn-block btn-light-success" onclick="addForm('formOrder-1')">
									<i class="flaticon2-plus pl-1"></i></button>
								</div>
								<div class="col-2 px-1">
								  <button type="button" class="btn btn-block btn-light-danger" onclick="deleteForm('formOrder-0')">
									<i class="flaticon2-trash pl-1"></i>
								  </button>
								</div>
							  </div>
							  <div class="form-group">
								<label>Dosis
								<span class="text-danger">*</span></label>
								<input name="medicines[0][dose]" type="text" class="form-control" placeholder="Masukkan jumlah dosis" />
							  </div>
							  <div class="form-group">
								<label>Harga
								<span class="text-danger">*</span></label>
								<input name="medicines[0][price]" type="text" class="form-control" placeholder="Masukkan harga" />
							  </div>
							  <hr/>
							</div>
						  </div>
						  <div class="form-group">
							<label>Obat Racikan <span class="text-danger"></span></label>
							<input name="concoction" type="text" class="form-control @error('dose') is-invalid @enderror"  placeholder="Masukkan obat ramuan jika diperlukan" value="{{ old('dose') }}"/>
							@error('dose')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
						<div class="form-group">
							<label>Harga Obat Racikan <span class="text-danger"></span></label>
							<input name="price_concoction" type="text" class="form-control @error('dose') is-invalid @enderror"  placeholder="Masukkan Harga obat ramuan jika diperlukan" value="{{ old('dose') }}"/>
							@error('dose')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
						  <div class="form-group">
							<label>Total Harga <span class="text-danger"></span></label>
							<input name="total" type="text" class="form-control @error('dose') is-invalid @enderror"  placeholder="Total Harga" value="{{ old('dose') }}"/>
							@error('dose')<div class="alert text-danger">{{ $message }}</div>@enderror
						</div>
							<div class="form-group">
								<label for="exampleSelect1">Status
									<div class=" col-form-label">
										<div class="radio-inline">
											<label class="radio radio-danger">
											<input class="col-6"  type="radio" name="status" value="Pemeriksaan_Berkala"/>
											<span></span>Pemeriksaan Berkala</label>
											<label class="radio radio-success">
											<input type="radio" name="status" checked="checked" value="Selesai" />
											<span></span>Selesai</label>
										</div>
									</div>
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
	<!--end::Button-->
</div>
<!--end::Content-->
@endsection

@section('script')
<script>
  var formRepeater = 0;
  var medicines = @json($medicines, JSON_PRETTY_PRINT);
  var medicinesSelect = '';
  
  function addForm(repeater) {
    formRepeater++;
    var nameForm = repeater;
    var nextForm = 'formOrder-'+formRepeater;
    var html = '<div id="'+ nameForm +'">'+
                  '<label for="exampleSelect1">Pilih Obat'+
                    '<span class="text-danger">*</span></label>'+
                    '<div class="row no-gutters">'+
                      '<div class="col-8 pr-1">'+
                    '<div class="form-group">'+
                      '<select name="medicines['+ formRepeater +'][medicine]" class="form-control" id="exampleSelect1">'+
                        medicinesSelect+
                      '</select>'+
                    '</div>'+
                  '</div>'+
                  '<div class="col-2 px-1">'+
                    '<button type="button" class="btn btn-block btn-light-success" onclick="addForm(\''+nextForm+'\')">'+
                      '<i class="flaticon2-plus pl-1"></i></button>'+
                  '</div>'+
                  '<div class="col-2 px-1">'+
                    '<button type="button" class="btn btn-block btn-light-danger" onclick="deleteForm(\''+nameForm+'\')">'+
                      '<i class="flaticon2-trash pl-1"></i>'+
                    '</button>'+
                  '</div>'+
                '</div>'+
                '<div class="form-group">'+
                  '<label>Dosis'+
                  '<span class="text-danger">*</span></label>'+
                  '<input name="medicines['+ formRepeater +'][dose]" type="text" class="form-control" placeholder="Masukkan jumlah item" />'+
                '</div>'+
				'<div class="form-group">'+
                  '<label>Harga'+
                  '<span class="text-danger">*</span></label>'+
                  '<input name="medicines['+ formRepeater +'][price]" type="text" class="form-control" placeholder="Masukkan jumlah item" />'+
                '</div>'+
                '<hr/>'+
              '</div>'+
            '</div>';
    $('#formRepeater').append(html);
  }
  function deleteForm(repeater) {
    $("#"+repeater).remove();
  }
  function beautifyItem() {
    var select = '';
    for (let index = 0; index < medicines.length; index++) {
      select = select+'<option value="'+medicines[index]['id_item']+'">'+medicines[index]['item_name']+'</option>'
    }
    medicinesSelect = select;
  }
  beautifyItem();
</script>
@endsection