{{--@for($i=110;$i<115;$i++)--}}
    {{--<p>{{ $t->surah($i)->data->name }} | {{ $t->surah($i)->data->englishName }} | {{ $t->surah($i)->data->numberOfAyahs }}</p>--}}
    {{--<br>--}}
{{--@endfor--}}

<?php $m=0; ?>
@while($listQuran[$m]->IDSurat === $listQuran[$m+1]->IDSurat)
    <?php $m++; ?>
@endwhile
<?php $m++; ?>



<p>
        <?php $n=0; $random=rand(0,$m-1);?>
    @while($listQuran[$n]->IDSurat === $listQuran[$n+1]->IDSurat)
        @if($n=$random)
            {{--......--}}
                {{ $jawaban = $listQuran[$random] }}
            <?php $n++; ?>
        @endif
        {{ $listQuran[$n]->Word }}
        <?php $n++; ?>
    @endwhile
            @if($n===$m)
                {{ $listQuran[$n]->Word }}
                <?php $n=0; ?>
            @endif
</p>
@if($jawaban->Word)
<p>{{ $jawaban->Word }}</p>
@endif