@extends('layouts.app')
@section('title', 'Documenten verify')

@section('content')
<section class="documentverify">
    <div class="container">
        <div class="row">
            <div class="pok-keuring">
                <div class="col">
                    <h2>
                        POK goedkeuren
                    </h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Student</th>
                                <th scope="col">Inleverdatum</th>
                                <th scope="col">Goedkeuring</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="pt-2">1</th>
                                <td class="pt-2">Jan Puistjes</td>
                                <td class="pt-2">27-01-2022</td>
                                <td class="pt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="goedkeuringcheck">
                                        <label class="form-check-label" for="goedkeuringcheck">
                                            Goedkeuring
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="document-goedkeuring">
                <div class="col">
                    <h2>
                        Document goedkeuren
                    </h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Documentnaam</th>
                                    <th scope="col">Student</th>
                                    <th scope="col">Inleverdatum</th>
                                    <th scope="col">Goedkeuring</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="pt-2">1</th>
                                    <td class="pt-2">Plan van aanpak</td>
                                    <td class="pt-2">Jan Puistjes</td>
                                    <td class="pt-2">27-01-2022</td>
                                    <td class="pt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="goedkeuringcheck">
                                            <label class="form-check-label" for="goedkeuringcheck">
                                                Goedkeuring
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection