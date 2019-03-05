@extends('main')

@section('title','| Contact Page')
	@section('content')
     	<div class="contents">
                <div class="contact-forms">

            		<h1>Contact Me</h1>
            		<hr>
	                <form>
	                    <label>Email</label>
	                    <input type="text" name="email" placeholder="example@gmail.com">

	                    <label>Subject</label>
	                    <input type="text" name="subject" placeholder="Topic">
	                    <label>message</label>
	                    <textarea placeholder="Type your message here ..."></textarea>
	                    <div class="row">
	                    	<input type="submit" name="submit">
	                    </div>
	                </form>          
            </div>      
    	</div>
    @endsection 