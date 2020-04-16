<section class="main-section">

<div class="content">
    
    <link rel="stylesheet" href="style<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <h1>Edit Pelanggan</h1>
    <hr>


    <form action="{{url('kasir/member',@$member->id)}}" method="post">

        @csrf
        @if(!empty($member))
            @method('PATCH')
        @endif


        <div>
            <label for="id">Id</label>
            <input type="text" name="id" id="id" value="{{old('id',@$member->id)}}">      
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{old('nama',@$member->nama)}}">
        </div>    
        <div>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="{{old('alamat',@$member->alamat)}}">
        </div>  
        <div>
            <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin Anda</option>
                        <option value="L" {{old('jenis_kelamin'. (@$member->jenis_kelamin == 'L')? 'selected' : '' )}}>L</option>
                        <option value="P" {{old('jenis_kelamin'. (@$member->jenis_kelamin == 'P')? 'selected' : '' )}}>P</option>
                </select>
        </div>    
        <div>    
            <label for="tlp">No. Telp</label>
            <input type="text" name="tlp" id="tlp" value="{{old('tlp',@$member->tlp)}}">
        </div>

        @csrf
        <button type="submit">Submit</button>

    </form>
</div>

</section>