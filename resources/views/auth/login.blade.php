<x-layout>

<x-page-heading>Log In</x-page-heading>


<div class="space-y-5">
    
<x-forms.form method="POST" action="/login" >

    <x-forms.input label="Email" name="email" type="email"></x-forms.input>

    <x-forms.input label="Password" name="password" type="password"></x-forms.input>

    <x-forms.button>Create Account</x-forms.button>
</x-forms.form>
</div>

</x-layout>

