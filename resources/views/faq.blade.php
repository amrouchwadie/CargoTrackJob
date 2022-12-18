@extends('layouts.app')

@section('styles')

@endsection

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <title>FAQ</title>
  </head>
  <style>
    * {
  padding: 0px;
  margin: 0px;
  box-sizing: border-box;
}

body {
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  line-height: 1.6;
}

.container {
  max-width: 970px;
  margin: 0 auto;
}

.faq-heading {
  margin-top: 45px;
  margin-bottom: 15px;
  text-align: center;
  font-weight: 400;
  font-size: 30px;
}

.faq-card {
  border: 1px solid #dce0e8;
  border-radius: 6px;
  padding: 24px 20px;
  margin-bottom: 12px;
  list-style: none;
  position: relative;
  cursor: pointer;
}

.faq-open-icon {
  font-size: 22px;
  position: absolute;
  top: 18px;
  right: 24px;
  font-weight: 700;
}

details[open] .faq-open-icon {
  top: 18px;
  right: 24px;
}

details > summary {
  list-style: none;
}

details > summary::-webkit-details-marker {
  display: none;
}

details[open] summary {
  color: #0186ff;
  font-weight: 500;
}

details[open] .faq-card-spoiler {
  display: inline-block;
  padding-top: 8px;
  color: #8b8b9a;
}

.faq-aftertext {
  text-align: center;
  color: #8b8b9a;
}
  </style>
  <body > 
    <main>
      <div class="container" style="    margin-left: 331px;">
        <h2 class="faq-heading">Frequently asked questions</h2>
  
        <details class="faq-card">
          <summary>How do I pay for the Essentials or Premium plan? <span class="faq-open-icon">+</span></summary>
          <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
        </details>
        <details class="faq-card">
          <summary>Can I cancel my Essentials or Premium plan subscription at any time? <span class="faq-open-icon">+</span></summary>
          <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
        </details>
        <details class="faq-card">
          <summary>We need to add new users to our team. How will that be billed? <span class="faq-open-icon">+</span></summary>
          <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
        </details>
        <details class="faq-card">
          <summary>My team wants to cancel its subscription. How do we do that? Can we get a refund? <span class="faq-open-icon">+</span></summary>
          <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
        </details>
        <details class="faq-card">
          <summary>Do you offer discounts for non-profit organizations or educational institutions? <span class="faq-open-icon">+</span></summary>
          <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
        </details>
  
        <h2 class="faq-heading">Still have questions?</h2>
        <p class="faq-aftertext">If you cannot find answer to your question in our FAQ, you can always<br>
          contact us. We will answer shortly!
        </p>
      </div>
    </main>
    <script>let summaryCollection = document.getElementsByTagName('summary');
        let signsCollection = document.getElementsByClassName('faq-open-icon');
        
        for(let i = 0; i < summaryCollection.length; i++) {
          summaryCollection[i].onclick = function() {
            if(signsCollection[i].innerHTML === '+') signsCollection[i].innerHTML = '—';
            else signsCollection[i].innerHTML = '+';
          }
        }</script>
    <script src="./script.js"></script>
  </body>



@endsection