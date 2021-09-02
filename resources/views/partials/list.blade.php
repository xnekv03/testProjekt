<p>Vyhledejte v tabulce:</p>
<input id="search" type="text" placeholder="Hledat..">
<br><br>


<table class="table" id="list">
    <thead>
    <tr>
        <th scope="col">ičo</th>
        <th scope="col">Společnost</th>
        <th scope="col">Přidáno</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)

    <tr>
        <td>{{$record->ico}}</td>
        <td>{{$record->name}}</td>
        <td>{{$record->updated_at}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#list tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>