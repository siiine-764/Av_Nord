<div class="container-fluid">
        <div class="row">
<div class="col-sm-12" style="margin: 15px; padding: 20px; padding-bottom: 90px; border-radius: 15px;background: linear-gradient(53.5deg, #834FE7 0%, #4ED3D3 98.83%);  margin:10px;border-radius: 10px;box-shadow: 0px 8px 8px rgb(46, 44, 44);" id="panel1">
   
    <form method="POST" action="{{ url('/home/store_admin')}}">
        <h1 style="text-align: center; padding:20px;font-size:40px">new product</h1>
        <div class="row mb-3 create" >
          <label for="inputEmail3" class="col-sm-3 col-form-label" style="font-size: 20px; text-align: center;" >Title : </label>
          <div class="col-sm-9">
          @csrf
            <input type="text" class="form-control" name="title" value="{{ $products->title ?? null }}" class="form-control" id="inputEmail3" 
            placeholder="title" style="font-size: 20px; border-radius: 7px;">
            @error('title') <span class="text-danger">{{$message}}</span> @enderror
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label" style="font-size: 20px; text-align: center;" > Prix : </label>
          <div class="col-sm-9">
            <input type="prix" class="form-control" class="form-control" name="prix" value="{{ $products->prix ?? null }}" id="inputPassword3" placeholder="prix" style="font-size: 20px; border-radius: 7px;">
            @error('prix') <span class="text-danger">{{$message}}</span> @enderror
          </div>
        </div>

        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label"  style="font-size: 20px; text-align: center;" > image product</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="inputPassword3" name="image" class="form-control" value="{{ $products->image ?? null }}" style="font-size: 20px; border-radius: 7px;">
              @error('image') <span class="text-danger">{{$message}}</span> @enderror
            </div>
          </div>

        <button type="submit" class="btn btn-primary " id="button-contact" style="padding: 7px 25px; font-size: 20px; border-radius: 7px;" >Save</button>
      </form>
      </div>

    </div>
</div>