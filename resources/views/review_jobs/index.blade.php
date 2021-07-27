@extends('layout.app')
@section('styles')

@endsection

@section('content')

    @include('review_jobs.review_jobs')

@endsection

@section('script')
    <script>
        var oTable = $('.oes_datatable').DataTable({
            ajax: {
                url: "{{ route('review-job.show',1) }}",
                dataSrc: ""
            },

            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'job_post_id ',
                    name: 'job_post_id '
                },
                {
                    data: 'user_id',
                    name: 'user_id'
                },
                {
                    data: 'status ',
                    name: 'status'
                } {
                    "data": null,
                    "targets": -1
                }
            ],
            order: [
                [0, 'desc']
            ]
        });
    </script>
@endsection
