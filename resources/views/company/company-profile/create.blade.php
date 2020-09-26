@extends('company.layout')


@section('content')

    @if(Session::has('message'))
        <p class="alert alert-danger">{{Session::get('message') }}</p>
    @endif

<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Information Générale de l'entreprise</h3>
    </div>{{-- .card-header --}}

    <form method="POST" action="{{ route('company.update', $company) }}"  enctype='multipart/form-data' >
        @method('patch')
        @csrf
        <div class="card-body">

            {{----------- ////// name ////// -------}}

            <div class="form-group">
                <label for="name">Nom de l'entreprise :</label>
                <input name="name" type="text" class="form-control"  id="name"  value="{{old('name', $company->name)}}"  placeholder="Enter le nom de l'entreprise">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            {{----------- ////// description ////// -------}}

            <div class="form-group">
                <label for="description">Description de l'entreprise :</label>
                <input name="description" value="{{old('description', $company->description)}}" type="text" class="form-control @error('description') is-invalid @enderror"  id="description" placeholder="Enter la description de l'entreprise">

                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            {{----------- ////// address ////// -------}}

            <div class="form-group">
                <label for="address">L'adresse de l'entreprise :</label>
                <input name="address" value="{{old('address', $company->address)}}" type="text" class="form-control @error('address') is-invalid @enderror"  id="address" placeholder="Enterez l'adresse de l'entreprise">

                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

                {{----------- ////// City ////// -------}}

            <div class="form-group">
                <label for="city">La ville :</label>
                <input name="city" value="{{old('city', $company->city)}}" type="text" class="form-control @error('city') is-invalid @enderror"  id="city" placeholder="Enterez l'adresse de l'entreprise">

                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            {{----------- ////// country ////// -------}}

            <div class="form-group">
                <label for="country">Le pays :</label>
                <input name="country" value="{{old('country', $company->country)}}" type="text" class="form-control @error('country') is-invalid @enderror"  id="country" placeholder="Enterez le pays">

                @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            {{----------- ////// phone ////// -------}}

            <div class="form-group">
                <label for="phone">Telephone :</label>
                <input name="phone"  value="{{old('phone', $company->phone)}}" type="text" class="form-control @error('phone') is-invalid @enderror"  id="phone" placeholder="Enterez le num de telephone">

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            {{----------- ////// Fax ////// -------}}

            <div class="form-group">
                <label for="Fax">Le Fax :</label>
                <input name="Fax" value="{{old('Fax', $company->Fax)}}" type="text" class="form-control @error('Fax') is-invalid @enderror"  id="Fax" placeholder="Enterez le num de Fax">

                @error('Fax')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            {{----------- ////// Email ////// -------}}

            <div class="form-group">
                <label for="email">Email :</label>
                <input name="email" value="{{old('email', $company->email)}}" type="text" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="Enterez l'Email'">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            {{----------- ////// Horaires de travail ////// -------}}

            <div class="form-group">
                <label for="start_time">Horaires de travail : debut</label>
                <input name="start_time" value="{{old('start_time', $company->start_time)}}" type="time" class="form-control @error('start_time') is-invalid @enderror"  id="start_time" placeholder="Enterez Horaire'">

                @error('start_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="end_time">Horaires de travail : fin</label>
                <input name="end_time" value="{{old('end_time', $company->end_time)}}" type="time" class="form-control @error('end_time') is-invalid @enderror"  id="end_time" placeholder="Enterez Horaire'">

                @error('end_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            {{----------- ////// Logo ////// -------}}

            <div class="form-group">
                <label for="logo">Logo de l'entreprise</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="logo" type="file" class="" id="logo">
                    </div>
                </div>

                @error('end_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>{{-- .card-body --}}

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>

    </form>

</div>{{-- .card card-primary --}}

@endsection

@section('Javascript')
    <script src="{{ asset('asset/adl/plugins/bs-custom-file-input.min.js') }}"></script>
@endsection
