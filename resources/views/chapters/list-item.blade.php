<a href="{{ $chapter->getUrl() }}" class="chapter entity-list-item @if($chapter->hasChildren()) has-children @endif" data-entity-type="chapter" data-entity-id="{{$chapter->id}}">
    <span class="icon text-chapter">@icon('chapter')</span>
    <div class="content">
        <h4 class="entity-list-item-name break-text">{{ $chapter->name }}</h4>
        <div class="entity-item-snippet">
            <p class="text-muted break-text mb-s">{{ $chapter->getExcerpt() }}</p>
        </div>
    </div>
</a>