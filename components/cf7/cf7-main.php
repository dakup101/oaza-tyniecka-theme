<label> Twoje imię i nazwisko
</label>

<label> Twój adres e-mail
    [email* your-email] </label>

<label> Temat
    [text* your-subject] </label>

<label> Twoja wiadomości (opcjonalne)
    [textarea your-message] </label>



<div class="grid grid-cols-3 gap-5">
    <label>[text* your-name placeholder "Imię i Nazwisko"] </label>
    <label>[tel* your-tel placeholder "Numer telefonu"] </label>
    <label>[email* your-email placeholder "Adres e-mail"] </label>
</div>
<div class="mt-5">
    <label>[textarea* your-msg placeholder "Dzień dobry, interesuje mnie dom na osiedlu Oaza. Proszę o
        kontakt."]</label>
</div>
[submit "Wyślij"]