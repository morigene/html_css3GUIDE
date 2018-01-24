<!DOCTYPE html>
<html>
<head>
	<title>welcome to html</title>
</head>
<body>
	<!-- description list -->
	<dl type="a">
		<dt> script language</dt>
		<dd> php</dd>
		<dd> javascro[t</dd>
		<dd> ASP.net</dd>
	</dl>
		<dl>
		<dt> programming language</dt>
		<dd> java</dd>
		<dd> c and C ++</dd>
		<dd> C#</dd>
	</dl>
	<!-- quation in my website -->
     <p> Web design is good when you are <q>CSS3 Master</q></p>

     <!-- Maintain the same space and line break  -->
      <p> <pre>format and line and breadk are maintened</pre></p>
      <!-- used to represent computer code -->
      <p>
      	<em> It is inside </em> <br>><!-- represent emphisize text -->
        <strong> It is inside</strong><br> <!-- define important text  -->
        <dfn> it is inside dfn tag</dfn> <br><!-- define a term -->
        <code>It is inside</code><br> <!-- define piece of computer coe -->
        <samp> specifies output of compute program</samp><br>
        <kbd> Define a keyboard input</kbd><br>
        <var>define a variable</var>
      </p>
      <!-- HTML5  -->
      <P>
      	<!-- SVG stands for Scalable Vectore Graphics -->
          <svg>
          	<circle cx="50" cy = "50" r="40" stroke="yellow" stroke-width="4" fill="red">
          </svg>
          <!-- Convas . draw graphic on web page  -->
          <br>

          <canvas  width="300" height="100" style="border:2px solid;">  
Your browser does not support the HTML5 canvas tag.  
</canvas>  
      </P>
      <p>
        origene is good and mom is better.
        <figure> <img src="origne.jpg" alt="talfu"> </figure><!-- used to mark up page.embedded some content -->
        <br>
        <figure>
          <img src="rubangura.jpg" alt="rubangura photo">
          <figcaption>Photo Rubangura </figcaption>
        </figure>
      </p> 
      <p>
        <details>
          <p>God is good , All the time, Good is good</p>
            <summary>
            <p> click to see more detais</p>
          </summary>
        </details>
      </p>
      <p>
        <!-- main tag used to represent the main content in body.Note do not include more than one -->
        <main>
          <h2>Microsoft</h2>
          <p>The microsoft is computer companey </p>
          <article>
            <h3> Talk about parteners</h3>
            <p>Partners help microsoft to develop </p>
          </article>
          <article>
            <h3>Talk the country using miicrosoft</h3>
            <p><ul>
              <li>Rwanda</li>
              <li>South Africa</li>
              <li>Kenya</li>
            </ul>
          </p>
          </article>
        </main>
      </p>
      <!--Audio tag and Video tag -->
      <p>      
      <audio controls> 
       <source src="koyal.mp3" type="audio/mpeg">
      </audio> 
      </p>
      <!-- video tag  with .ogg , .mp4. , .webM -->
      <p>
        <video controls>
          <source src="movie.mp4" type="">
        </video>
      </p>
      <!-- progress used to display progress of task -->
      <p>
        <progress value="50" max="100">
      </p>
      <!-- Meter used to measure data with a range ,define scalar measurement with range.It is also know as a gause -->
      <p>
        <meter value="30" min="1" max="100"> 30 out of 100</meter>
        <br>
        <meter value="0.8">80%</meter>
      </p>
      <!-- Datalist tag, used to provide auto complete feature on form element -->
      <p>
        <label>
          Enter name of country <br>
          <input type="text" id="count" list="country">
          <datalist id="country">
            <option value="Belique">
            <option value ="Alemange">
            <option value ="Russia">
            <option value ="USA">
            <option value ="England">
            <option value ="Rwanda">
            <option value ="Burundi">
            <option value ="Congo">
          </datalist>
        </label>
      </p>
</body>
</html>