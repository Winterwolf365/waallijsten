<x-mail::message>
# Contactformulier ingevult

Voormaan: {{ $contact->first_name }} <br>
Achternaam: {{ $contact->last_name }} <br>
Email: {{ $contact->email }} <br>
Telefoonnummer: {{ $contact->tel }} <br>
Bericht: {{ $contact->message }} <br>

De {{ config('app.name') }}
</x-mail::message>
