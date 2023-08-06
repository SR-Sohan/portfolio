@extends('layouts.layout')

@section('content')
    


    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>About Us</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="about.html">About</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    
   {{-- @include('client.components.about')
   <form action="/languages/store" method="post">
    @csrf
    
    <div class="form-group">
        <label for="language_code">Language Code</label>
        <input type="text" name="language_code[]" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" name="content[]" class="form-control" required>
    </div>
    
    <button type="button" id="addLanguage">Add Another Language</button>
    
    <button type="submit">Submit</button>
</form>

<script>
    document.getElementById('addLanguage').addEventListener('click', function () {
        const form = document.querySelector('form');
        
        const languageInput = document.createElement('input');
        languageInput.type = 'text';
        languageInput.name = 'language_code[]';
        languageInput.className = 'form-control';
        languageInput.required = true;
        
        const contentInput = document.createElement('input');
        contentInput.type = 'text';
        contentInput.name = 'content[]';
        contentInput.className = 'form-control';
        contentInput.required = true;
        
        form.insertBefore(languageInput, this);
        form.insertBefore(contentInput, this);
    });
</script> --}}
        
    @endsection