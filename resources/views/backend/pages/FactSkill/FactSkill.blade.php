@extends('backend/mastering/master');
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('Factstore')}}" method="POST" class="" style="border:1px dashed; padding:20px; background-color:green;">
                @csrf
                <div class="form-group">
                    <input type="text" name="f_description" placeholder="Fact Description" class="form-control mt-2" required>
                    <input type="number" name="f_nummber" placeholder="Fact Number" class="form-control mt-2" required>
                    <input type="text" name="f_name" placeholder="Fact Name" class="form-control mt-2" required>
                    <input type="text" name="f_title" placeholder="Fact Title" class="form-control mt-2" required>
                    <input type="text" name="s_description" placeholder="Skill Description" class="form-control mt-2" required>
                    <input type="text" name="s_name" placeholder="Skill Name" class="form-control mt-2" required>
                    <input type="number" name="s_number" placeholder="Skill Number" class="form-control mt-2" required>
                    <input type="number" name="s_vloume" placeholder="Skill Volume" class="form-control mt-2" required>
                    <button id="FactSkill" class="btn btn-primary mt-2 form-control">Save Info</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection