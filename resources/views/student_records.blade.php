<x-header/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="mb-4">Studnt Records</h2>
    <a class='btn btn-info pull-right' href="{{ url('/') }}">Add Student </a>
    <table class="table table-bordered yajra-datatable">
        <thead>
           <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Roll Nu</th>
                        <th>Hindi Marks</th>
                        <th>English Marks</th>
                        <th>Sanskrit Marks</th>
                        <th>Sceince Marks</th>
                        <th>Maths Marks</th>
                        <th>Total Marks</th>
                    </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
      let imgpath = "image/";
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('student-records') }}",
        columns: [
            {data: 'image', name: 'name',orderable: false,searchable: false,"render":function (data, type, full, meta) {
        return "<img src=\"" + imgpath + data + "\" height=\"50\"/>";
    }},
            {data: 'name', name: 'name',orderable: true,searchable: true},
            {data: 'roll_no', name: 'roll_no',orderable: true,searchable: true},
            {data: 'hindi_marks', name: 'hindi_marks',orderable: true,searchable: false},
            {data: 'eng_marks', name: 'eng_marks',orderable: true,searchable: false},
            {data: 'maths_marks', name: 'maths_marks',orderable: true,searchable: false},
            {data: 'science_marks', name: 'science_marks',orderable: true,searchable: false},
            {data: 'sanskrit_marks', name: 'sanskrit_marks',orderable: true,searchable: false},
            {data: 'totalmarkes', name: 'totalmarkes',orderable: true,searchable: false},
           
        ]
    });
    
  });


</script>





<x-footer/>