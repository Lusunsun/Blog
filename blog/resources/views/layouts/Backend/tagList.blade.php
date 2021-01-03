<select class="form-control">
    <option value={{ isset($tagName)?$tagName:'' }}>{{ isset($tagName)?$tagName:'111' }}</option>
    @inject('tags', 'App\Services\TagsService')
    @foreach($tags->tags() as $tag)
        <option value={{$tag->id}}>{{$tag->tag_name}}</option>
    @endforeach
</select>

