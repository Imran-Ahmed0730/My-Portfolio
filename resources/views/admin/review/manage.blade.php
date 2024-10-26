@extends('admin.master')
@section('title')
    Manage Projects
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-center d-flex justify-content-between">
                    <h2 class="card-title">Manage Reviews</h2>
                    <h4 class="text-success mb-0">
                        {{ Session('message') }}
                    </h4>
                    <div>
                        <button id="toggle-select" class="btn btn-primary mb-3">Select Messages</button>
                        <button id="delete-selected" class="btn btn-danger mb-3" style="display:none;">Delete Selected</button>
                    </div>
                </div><!--end card-header-->
                <div class="card-body">
                    <form id="delete-form" action="{{ route('review.bulkDelete') }}" method="POST" style="display:none;">
                        @csrf
                        <input type="hidden" name="ids" id="selected-ids" value="">
                    </form>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr align="left">
                                <th><input type="checkbox" id="select-all"></th>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th class="text-end">Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($reviews as $review)
                                <tr>
                                    <td><input type="checkbox" class="review-checkbox" value="{{ $review->id }}" style="display:none;"></td>
                                    <td>{{ $i++ }}.</td>
                                    <td>{{ $review->project->title }}</td>
                                    <td>{{ $review->name }}</td>
                                    <td>{{ $review->email }}</td>
                                    <td>{{ $review->comment }}</td>
                                    <td class="{{ $review->status == 0 ? 'text-danger' : 'text-success' }} text-end">
                                        {{ $review->status == 0 ? 'Unpublished' : 'Published' }}
                                    </td>
                                    <td class="text-end">
                                        <div class="btn-group">
                                            <a href="{{ route('review.status', ['id' => $review->id]) }}" class="btn btn-outline-info">
                                                <i class="las la-exchange-alt" style="font-size: 18px !important;"></i>
                                            </a>
                                            <form action="{{ route('review.remove') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $review->id }}">
                                                <button type="submit" onclick="return confirm('Please Confirm Before Deleting the Review!')" class="btn btn-outline-danger">
                                                    <i class="las la-trash-alt" style="font-size: 18px !important;"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection
@push('js')
    <script>
        document.getElementById('toggle-select').addEventListener('click', function() {
            const checkboxes = document.querySelectorAll('.review-checkbox');
            const deleteBtn = document.getElementById('delete-selected');
            checkboxes.forEach(checkbox => {
                checkbox.style.display = checkbox.style.display === 'none' ? 'inline' : 'none';
                deleteBtn.style.display = deleteBtn.style.display === 'none' ? 'inline' : 'none';
            });
        });

        document.getElementById('select-all').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.review-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        document.getElementById('delete-selected').addEventListener('click', function() {
            const selectedIds = Array.from(document.querySelectorAll('.review-checkbox:checked')).map(cb => cb.value);
            if (selectedIds.length > 0) {
                document.getElementById('selected-ids').value = selectedIds.join(',');
                document.getElementById('delete-form').submit();
            } else {
                alert('Please select at least one review to delete.');
            }
        });
    </script>
@endpush
