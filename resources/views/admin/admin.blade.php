@extends('layout.layoutadm')
@section('content')

<div class="row my-5">
    <h3 class="fs-4 mb-3">Data User</h3>
    <div class="col">
        <div class="table-responsive">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $number => $item)
                    <tr>
                        <th scope="row">{{ $number+1 }}</th>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['username'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>
                            <button class="bg-transparent" style="border: none"><a
                                    href="{{ route('destroyUser', $item->id) }}" style="color: rgb(229, 83, 83)"><i
                                        class="fas fa-trash"></i></a></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };

</script>

@endsection
