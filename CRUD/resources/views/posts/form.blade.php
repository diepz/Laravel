<div class="row">
    <div class="col-xs-12, col-lg-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="title" placeholder="Title" class="form-control"s>
        </div>
    </div>
    <div class="col-xs-12, col-lg-12">
        <div class="form-group">
        <strong>Body:</strong>
        <input type="text" name="body" placeholder="Body" class="form-control" style="height: 150px" >
        </div>
    </div>
    <br>
    <div class="col-xs-12">
        <button type="submit" class="btn btn-xs btn-primary" name="button">SUBMIT</button>
        <a href="{{ route('posts.index') }}" class="btn btn-xs btn-success">Back</a>
    </div>
</div>