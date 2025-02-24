@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3>📋 Add New Club</h3>
        </div>

        <div class="card-body">
            {{--  Success Message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{--  Display Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>There were some issues with your input:</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{--  Add Club Form --}}
            <form action="{{ route('Clubs.updat',$club->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{--  Club Name --}}
                <div class="mb-3">
                    <label for="tilte" class="form-label">Club Name</label>
                    <input type="text" class="form-control @error('tilte') is-invalid @enderror" 
                           id="tilte" name="tilte" placeholder="Enter club name" value="{{ old('tilte', $club->tilte) }}" required>
                    @error('tilte')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{--  Club Image --}}
                <div class="mb-3" >
                    <label for="image" class="form-label">Club Image</label>
                    <input  class="form-control @error('image') is-invalid @enderror" 
                           id="image" value="{{ old('image', $club->image) }}"  name="image" required>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{--  Club Description --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Club Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" name="description" rows="4" placeholder="Enter club description" required>{{ old('description',$club->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{--  Creation Date --}}
                <div class="mb-3">
                    <label for="date_creation" class="form-label">Creation Date</label>
                    <input type="date" class="form-control @error('date_creation') is-invalid @enderror" 
                        id="date_creation" name="date_creation" value="{{ old('date_creation',$club->date_creation) }}" required>
                    @error('date_creation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{--  Submit Button --}}
                <button type="submit" class="btn btn-success w-100">💾 Add Club</button>
            </form>
        </div>
    </div>
</div>
@endsection
