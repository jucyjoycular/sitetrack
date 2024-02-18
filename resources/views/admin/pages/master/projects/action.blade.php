<div class="d-flex">
    <a class="btn btn-info" href="{{ route('admin.master.projects.edit',$model->id) }}">Edit</a>
    <button class="btn btn-danger ml-2" onclick="handleDeleteRows({{ $model }})">Delete</button>
</div>
