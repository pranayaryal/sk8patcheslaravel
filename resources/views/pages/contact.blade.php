@extends('layout')

@section('content')


    <div class="row">

        <div class="large-6 columns">

            <div class="section-container tabs" data-section>
                <section class="section">
                    <h5 class="title"><a href="#panel1">Contact Our Company</a></h5>
                    <div class="content" data-slug="panel1">
                        <form>
                            <div class="row collapse">

                                    <label class="copyright" class="inline">Name</label>

                                <div class="row">
                                    <input type="text" id="yourName" placeholder="Name">
                                </div>
                            </div>
                            <div class="row collapse">

                                <label class="copyright" class="inline">Email</label>

                                <div class="row">
                                    <input type="text" id="yourEmail" placeholder="Email">
                                </div>
                            </div>
                            <label class="copyright">What's up?</label>
                            <textarea rows="4"></textarea>
                            <button type="submit" class="radius button">Submit</button>

                        </form>
                    </div>
                </section>

            </div>
        </div>


        <div class="large-3 columns">
            <h5></h5>
        </div>

    </div>


@stop



