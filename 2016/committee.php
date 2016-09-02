<?php
/*******************************************************************************
 * Copyright (c) 2016 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Andrea Ross(Eclipse Foundation) - Initial implementation
 *******************************************************************************/

/** 
 * Define ABSPATH as this files directory 
 */
define('ABSPATH', dirname(__FILE__) . '/2016/');

require_once '../tpl/head.tpl.php';
require_once '../tpl/top.tpl.php';
?>


<h1>Our Committee</h1>

<p>The conference would not happen without the efforts of our wonderful team. Please help us thank them!</p>


<table style="width:100%">
  <tr style="vertical-align: top;">
    <td style="vertical-align: top;width: 33%;" >
      <image style="margin: 10px; float: left;" src="../images/committee/Cozzi.jpg">
      <p><strong>Patrick Cozzi</strong></p>
      <p>Patrick Cozzi is our program chair for 2016 and led the team for program selection.
      <p>bio goes here</p>
    </td>
    <td style="vertical-align: top;width: 33%;" >
      <image style="margin: 10px; float: left;" src="../images/committee/Lyon.jpg">
      <p><strong>Elizabeth Lyon</strong></p>
      <p>Elizabeth Lyon is an innovator and researcher active in the geospatial, social science and open-source communities. In Washington, DC she leads several community initiatives including the GeoDC community, the Geo-Northern Virginia Community, the MapStory community, and Women in GIS. She also volunteers internationally building geospatial solutions and supporting community development. Liz is currently  completing her PhD in Geospatial Sciences at George Mason University, where her research focuses on virtual and physical environments generation narrative that shape global urban forms and functions. She earned a Post-Graduate Certificate in Computational Social Science from George Mason University, a Master of Science in Geography from University of Illinois, Urbana-Champaign and a Bachelor of Arts in Economics and French from Augustana College (Rock Island, IL).</p>
    </td>
    <td style="vertical-align: top;width: 33%;" >
      <image style="margin: 10px; float: left;" src="../images/committee/Kunce.jpg">
      <p><strong>Dale Kunce</strong></p>
      <p>Dale Kunce leads the international GIS team at the <a href="http://redcross.org/">American Red Cross</a> where he is responsible for the adoption and creation of open source software such as OpenMapKit, open data standards and OpenStreetMap to supercharge the work of the American Red Cross. Dale is a geospatial engineer and urban planner with more than ten years of experience working directly with communities throughout the world. He and his team support programs and projects for both international disaster response and long-term programs. Kunce’s past work has taken him from community organizing in the California Central Valley and developing analytics for pandemic response in Uganda to helping astronauts capture high-resolution imagery from the International Space Station. He has helped coordinate the Red Cross response efforts for the last couple of years, working closely with HOT. He is a founder of <a href="http://missingmaps.org/">Missing Maps</a> and a frequent contributor OSM under the username <a href="http://www.openstreetmap.org/user/dkunce">dkunce</a>. Dale is a current board member, elected during the June 2015 Special Election.</p>
    </td>
  </tr>
  <tr style="vertical-align: top;">
    <td style="vertical-align: top;width: 33%;" >
      <image style="margin: 10px; float: left;" src="../images/committee/Levine.jpg">
      <p><strong>Rachel Levine</strong></p>
      <p>bio goes here</p>
    </td>
    <td style="vertical-align: top;width: 33%;" >
      <image style="margin: 10px; float: left;" src="../images/committee/Tucker.jpg">
      <p><strong>Christopher Tucker</strong></p>
      <p>Dr. Christopher Tucker manages Yale House Ventures, a portfolio of social ventures and technology companies that span the worlds of energy, geospatial, sensor, cyber-security, open source, and social media technologies, across the domains of defense/intelligence, international affairs, civilian government, commercial industry, NGOs, and academe. He is also the Chairman and CEO of The MapStory Foundation and President of the foreign policy advocacy group, Friends of the Arc. Dr. Tucker was previously Senior VP for the Americas/National Programs at ERDAS and President/CEO of IONIC, a leader in interoperable web-mapping, location based services, imagery management and distributed geoprocessing. He has served on a variety of Boards such as the US Geospatial intelligence Foundation, the Open Geospatial Consortium, Open Plans, OpenGeo, the Secretary of Interior’s National Geospatial Advisory Committee, and the Defense Science Board Intelligence Task Force, the DNI’s Intelligence Community Strategic Studies Group, and serves as an Independent Advisor to the Director of the National Geospatial Intelligence Agency (NGA). Dr. Tucker served on the National Academy of Science’s Committee on NGA’s GEOINT Research Priorities.</p>
    </td>
    <td style="vertical-align: top;width: 33%;" >
      <image style="margin: 10px; float: left;" src="../images/committee/Sheets.jpg">
      <p><strong>Kari Sheets</strong></p>
      <p>bio goes here</p>
    </td>
  </tr>
  <tr style="vertical-align: top;">
    <td style="vertical-align: top;width: 33%;" >
      <image style="margin: 10px; float: left;" src="../images/committee/Pickle.jpg">
      <p><strong>Eddie Pickle</strong></p>
      <p>bio goes here</p>
    </td>
    <td style="vertical-align: top;width: 33%;" >
      <image style="margin: 10px; float: left;" src="../images/committee/Callaway.jpg">
      <p><strong>Jason Callaway</strong></p>
      <p>Jason Callaway is a senior solutions architect at Red Hat, specializing in secure cloud computing. In his current role, Jason is the technical lead working across the US Government agencies to help implement their cloud migration strategies. Prior to joining Red Hat, Jason deployed the first mission OpenShift Platform as a Service environment in the Department of Defense. As a result of his work with PaaS frameworks, Jason has been focusing on the containerization of geospatial services in the interest of lowering the user and developer barriers to entry, see <a href="http://geopaas.io">http://geopaas.io</a> for details. Jason speaks frequently at open source and cryptography meetups, his blog is at <a href="https://blog.jasoncallaway.com">https://blog.jasoncallaway.com</a>.</p>
    </td>
    <td style="vertical-align: top;width: 33%;" >
      <image style="margin: 10px; float: left;" src="../images/committee/Calamito.jpg">
      <p><strong>Anthony Calamito</strong></p>
      <p>bio goes here</p>
    </td>
  </tr>
<table>


<?
require_once '../tpl/footer.tpl.php';
?>
