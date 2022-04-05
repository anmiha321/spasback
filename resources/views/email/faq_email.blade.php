Здраствуйте это {{$faq_email}}<br><br>
@if($faq_msgs)
    <h4>
        Мой вопрос:
        </h4>
        <p>
            @foreach ($faq_msgs as $faq_msg)
                {{$faq_msg}}<br>
            @endforeach
    </p>
        <hr>
        @endif
С уважением {{$faq_email}}.
