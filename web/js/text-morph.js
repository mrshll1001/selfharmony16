// arrays for text. Filthy but good


var person0 = "<p>I am a Selfharmer </p>" + "<p>I was never able to explain what the cutting did for me in a way someone would understand:how it was a form of punishment and also of cleansing, how it allowed me to drain everything toxic and spoiled from myself, how it made me feel that my body is truly is mine and no one else. I was completely introverted for about 18 months, not getting out of bed, not seeing a point in anything and most of all, just wanting to not be here anymore. I decided that it would be best for me to tell someone at the university about my illness. This is because I was concerned that if I stayed in the dark place I had been in previously, I would be all on my own, with no one to look out for me, and I could be at risk of harming myself. After telling my friend about my mental health issues, I have been overwhelmed by the amount of support and understanding I have been offered. She saw what was happening and encouraged me to go to the doctors. They couldn't believe that I had kept it to myself for that long, as much as I wanted to explain to my parents what I was going through I couldn’t. The doctors were so so pleased that I had come to see them. They were encouraging and supportive straight away they seemed to get where I was coming from.</p>";

var person1 = "<p>I am a Selfharmer </p>" + "<p><span class='highlight-yellow' id='p1-comment1'>I was never able to explain what the cutting did for me in a way someone would understand:how it was a form of punishment and also of cleansing, how it allowed me to drain everything toxic and spoiled from myself, how it made me feel that my body is truly is mine and no one else.</span> <span class='person-1-blur'>I was completely introverted for about 18 months, not getting out of bed, not seeing a point in anything and most of all, just wanting to not be here anymore. I decided that it would be best for me to tell someone at the university about my illness. This is because I was concerned that</span> <span class='highlight-purple' id='p1-comment2'>if I stayed in the dark place I had been in previously, I would be all on my own, with no one to look out for me, and I could be at risk of harming myself.</span> <span class='person-1-blur'>After telling my friend about my mental health issues, I have been overwhelmed by the amount of support and understanding I have been offered. She saw what was happening and encouraged me to go to the doctors.</span> <span class='highlight-teal' id='p1-comment3'>They couldn't believe that I had kept it to myself for that long, as much as I wanted to explain to my parents what I was going through I couldn’t.</span> <span class='highlight-cyan' id='p1-comment4'>The doctors were so so pleased that I had come to see them. They were encouraging and supportive straight away they seemed to get where I was coming from.</span></p>";

var person2 = "<p>I am a Selfharmer </p>" + "<p><span class='highlight-yellow' id='p2-comment1'>I was never able to explain what the cutting did for me in a way someone would understand</span>:<span class='person-2-blur'>how it was a form of punishment and also of cleansing, how it allowed me to drain everything toxic and spoiled from myself, how it made me feel that my body is truly is mine and no one else.</span> <span class='highlight-teal' id='p2-comment2'>I was completely introverted for about 18 months, not getting out of bed, not seeing a point in anything and most of all, just wanting to not be here anymore.</span> <span class='person-2-blur'>I decided that it would be best for me to tell someone at the university about my illness. This is because I was concerned that if I stayed in the dark place I had been in previously, I would be all on my own, with no one to look out for me, and I could be at risk of harming myself.</span> <span class='highlight-purple' id='p2-comment3'>After telling my friend about my mental health issues, I have been overwhelmed by the amount of support and understanding I have been offered.</span> <span class='highlight-cyan' id='p2-comment4'>She saw what was happening and encouraged me to go to the doctors.</span> <span class='person-2-blur'>They couldn't believe that I had kept it to myself for that long, as much as I wanted to explain to my parents what I was going through I couldn’t. The doctors were so so pleased that I had come to see them. They were encouraging and supportive straight away they seemed to get where I was coming from.</span></p>";

// ==================================================================
// Person 0 Button
// ==================================================================
$('#person-0-btn').click(function(e){
  $('#content-container').fadeOut('slow', function(){
    $('#content-container').html(person0);
    $('#content-container').fadeIn('slow');
  });



});

// ==================================================================
// Person 1 Button
// ==================================================================
$('#person-1-btn').click(function(e){
  $('#content-container').fadeOut('slow', function(){
    $('#content-container').html(person1);
    $('.person-1-blur').addClass('blurry');
    $('#content-container').fadeIn('slow');
  });

});

// ==================================================================
// Person 2 Button
// ==================================================================
$('#person-2-btn').click(function(e){
  $('#content-container').fadeOut('slow', function(){
    $('#content-container').html(person2);
    $('.person-2-blur').addClass('blurry');
    $('#content-container').fadeIn('slow');
  });

});

$('#content-container').on('click', '#p1-comment1', function(e){
  var html = "<p>We felt that you were struggling but it was so hard to reach you</p>";

  $('#comment-box').html(html);
});

$('#content-container').on('click', '#p1-comment2', function(e){
  var html = "<p>We were frightened that you are out there alone at university and we are too far away to help as much as we can.</p>";

  $('#comment-box').html(html);
});

$('#content-container').on('click', '#p1-comment3', function(e){
  var html = "<p>We tried. After you went to the doctors and you felt comfortable telling us we were forced to learn about self-harming, and start thinking of how we can support you and be there on your road to recovery</p><p>We are glad the doctors are helping and just glad that when you are in that place there is some one to help you.</p>";

  $('#comment-box').html(html);
});

$('#content-container').on('click', '#p1-comment4', function(e){
  var html = "<p>When you first told us, it was hard to understand and we couldn’t understand why?</p>";

  $('#comment-box').html(html);
});
