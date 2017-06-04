@for($i=78;$i<115;$i++)
    <p>{{ $t->surah($i)->data->name }} | {{ $t->surah($i)->data->englishName }} | {{ $t->surah($i)->data->numberOfAyahs }}</p>
    <br>
@endfor