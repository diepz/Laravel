@extends('home')

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Cập nhật Blog</h1>
        </div>
        <div class="col-12">
            <form method="post" action="">
                @csrf
                <input type="hidden" name="id" value="<?php echo $posts->id; ?>"/>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo $posts->name; ?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Teaser</label>
                    <textarea name="teaser" class="form-control"><?php echo $posts->date; ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>