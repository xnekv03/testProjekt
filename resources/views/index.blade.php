@extends('base')

@section('content')



        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#formModal">Přidat IČO
        </button>


    @include('partials.list')

    <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="formModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Přidat IČO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <form method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">IČO</label>
                                <input type="string" class="form-control" id="ico" name="ico" placeholder="24662623">
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">Uložit
                                </button>
                            </div>

                        </form>
                    </div>
                </div>



            <script type="text/javascript">
                $(document).ready(function () {
                    $('#save').click(function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: '/ares',
                            type: "post",
                            data: {'ico': $('input[name=ico]').val(), '_token': $('input[name=_token]').val()},
                            dataType: 'JSON',
                            success: function (response) {
                                console.log(response)

                                if (!response.exists) {

                                    var ico = response.ares.ico;
                                    var name = response.ares.name;
                                    var time = response.ares.created_at;
                                    var markup = "<tr><td> " + ico + " </td><td> " + name + " </td><td>" + time + "</td></tr>";
                                    $('#list tr:first').after(markup);
                                }
                            }
                            // error: function (response) {
                            //
                            //     var chyba = JSON.stringify(response.responseJSON.errors)
                            //     console.log(chyba)
                            //     // alert(chyba);
                            // }
                        });

                    });
                });
            </script>

@endsection