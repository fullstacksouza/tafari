<!DOCTYPE html>
<html>
<body>

<form action="{{url('admin/youtube/upload')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
    Select image to upload:
    <input type="file" name="video" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>