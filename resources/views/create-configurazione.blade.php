
<h1>NEW CONFIG</h1>
<form action="{{ route('config-store') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="name">TITLE</label>
        <br>
        <input type="text" name="title" value="">
    </div>
    <div class="form-group">
        <label for="lastname">DESCRIPTION</label>
        <br>
        <input type="text" name="description" value="">
    </div>
    
    <br><br>
    <button type="submit">CREATE NEW OSPITE</button>
</form>
