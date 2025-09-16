<x-layout>
    <x-page-heading>Create new Job Post</x-page-heading>

    <x-forms.form method="POST" action="/jobs">

        <x-forms.input label="title" name="title" placeholder="Web Developer"/>
        <x-forms.input label="Salary" name="salary" placeholder="P90,000"/>
        <x-forms.input label="Location" name="location" placeholder="Metro Manila"/>


        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="eg. facebook.com/jobs"/>
        <x-forms.checkbox label="Feature (Cost Extra)" name="featured" />
        
        <x-forms.divider />
        
        
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="IT, Sales, Managerial"/>

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>


</x-layout>