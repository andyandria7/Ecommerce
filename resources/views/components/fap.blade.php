@extends('layouts.master')
@section('title')
    FAQ
@endsection
@section('content')
<div class="page-banner" style="background-image: url({{ asset('assets/uploads/banner.jpg') }});">
    <div class="inner">
        <h1>Foires aux Questions</h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                <div class="panel-group" id="faqAccordion">                    
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                                <h4 class="panel-title">
                                    Q:How to find an item?
                                </h4>
                            </div>
                            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                        We have a wide range of fabulous products to choose from. <br>
                                        Tip 1: If you're looking for a specific product, use the keyword search box located at the top of the site. Simply type what you are looking for, and prepare to be amazed!<br>
                                        Tip 2: If you want to explore a category of products, use the Shop Categories in the upper menu, and navigate through your favorite categories where we'll feature the best products in each.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                                <h4 class="panel-title">
                                    Q:Quelle est votre politique de retour ? 
                                </h4>
                            </div>
                            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                        You have 15 days to make a refund request after your order has been delivered.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                                <h4 class="panel-title">
                                    Q: I received a defective/damaged item, can I get a refund?
                                </h4>
                            </div>
                            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                        In case the item you received is damaged or defective, you could return an item in the same condition as you received it with the original box and/or packaging intact. Once we receive the returned item, we will inspect it and if the item is found to be defective or damaged, we will process the refund along with any shipping fees incurred.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                                <h4 class="panel-title">
                                    Q:When are ‘Returns’ not possible?
                                </h4>
                            </div>
                            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                        There are a few certain scenarios where it is difficult for us to support returns: <br><br>

                                        Return request is made outside the specified time frame, of 15 days from delivery. <br>
                                        Product is used, damaged, or is not in the same condition as you received it. <br>
                                        Specific categories like innerwear, lingerie, socks and clothing freebies etc. <br>
                                        Defective products which are covered under the manufacturer's warranty.<br>
                                        Any consumable item which has been used or installed.<br>
                                        Products with tampered or missing serial numbers. <br>
                                        Anything missing from the package you've received including price tags, labels, original packing, freebies and accessories. <br>
                                        Fragile items, hygiene related items. <br>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                                <h4 class="panel-title">
                                    Q:What are the items that cannot be returned?
                                </h4>
                            </div>
                            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                        The items that can not be returned are: <br><br>

                                        Clearance items clearly marked as such and displaying a No-Return Policy <br><br>

                                        When the offer notes states so specifically are items that cannot be returned. <br><br>

                                        Items that fall into the below product types-: <br>

                                        1/ Underwear <br>
                                        2/ Lingerie <br>
                                        3/ Socks <br>
                                        4/ Software <br>
                                        5/ Music albums <br>
                                        6/ Books<br>
                                        7/ Swimwear<br>
                                        8/ Beauty & Fragrances<br>
                                        9/ Hosiery<br><br>
                                        Also, any consumable items that are used or installed cannot be returned. As outlined in consumer Protection Rights and concerning section on non-returnable items
                                    </p>
                                </div>
                            </div>
                        </div>     
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection