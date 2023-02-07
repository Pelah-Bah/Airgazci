
                                <select name=""   style="width: 100px; height:1.4rem; padding: 0rem;" class="form-control">
                                    @foreach ($familles as $famille)
                                    <option id="Familles_id" value="{{ $famille['id'] }}"  name="Familles_id"> {{ $famille['id'] }}</option>
                                    @endforeach
                                </select>
                                <select name="" id="" style="width: 100px; height:1.4rem; padding: 0rem;" class="form-control">
                                    @foreach ($formats as $format)
                                    <option id="format_id" value="{{ $format['id'] }}" name="format_id" > {{ $format['libelleformat'] }} </option>
                                    @endforeach
                                </select>
