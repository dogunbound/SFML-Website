<?php
    $version = '2.6.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'UdpSocket.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.9.6 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
var searchBox = new SearchBox("searchBox", "search/",'.php');
/* @license-end */
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <span id="MSearchSelect"                onmouseover="return searchBox.OnSearchSelectShow()"                onmouseout="return searchBox.OnSearchSelectHide()">&#160;</span>
          <input type="text" id="MSearchField" value="" placeholder="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.svg" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<div id="MSearchResults">
<div class="SRPage">
<div id="SRIndex">
<div id="SRResults"></div>
<div class="SRStatus" id="Loading">Loading...</div>
<div class="SRStatus" id="Searching">Searching...</div>
<div class="SRStatus" id="NoMatches">No Matches</div>
</div>
</div>
</div>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_5c1116cdc74b8c7983261a15f16adc17.php">Network</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">UdpSocket.hpp</div></div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a id="l00001" name="l00001"></a><span class="lineno">    1</span> </div>
<div class="line"><a id="l00002" name="l00002"></a><span class="lineno">    2</span><span class="comment">//</span></div>
<div class="line"><a id="l00003" name="l00003"></a><span class="lineno">    3</span><span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a id="l00004" name="l00004"></a><span class="lineno">    4</span><span class="comment">// Copyright (C) 2007-2023 Laurent Gomila (laurent@sfml-dev.org)</span></div>
<div class="line"><a id="l00005" name="l00005"></a><span class="lineno">    5</span><span class="comment">//</span></div>
<div class="line"><a id="l00006" name="l00006"></a><span class="lineno">    6</span><span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a id="l00007" name="l00007"></a><span class="lineno">    7</span><span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a id="l00008" name="l00008"></a><span class="lineno">    8</span><span class="comment">//</span></div>
<div class="line"><a id="l00009" name="l00009"></a><span class="lineno">    9</span><span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a id="l00010" name="l00010"></a><span class="lineno">   10</span><span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a id="l00011" name="l00011"></a><span class="lineno">   11</span><span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a id="l00012" name="l00012"></a><span class="lineno">   12</span><span class="comment">//</span></div>
<div class="line"><a id="l00013" name="l00013"></a><span class="lineno">   13</span><span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a id="l00014" name="l00014"></a><span class="lineno">   14</span><span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a id="l00015" name="l00015"></a><span class="lineno">   15</span><span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a id="l00016" name="l00016"></a><span class="lineno">   16</span><span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a id="l00017" name="l00017"></a><span class="lineno">   17</span><span class="comment">//</span></div>
<div class="line"><a id="l00018" name="l00018"></a><span class="lineno">   18</span><span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a id="l00019" name="l00019"></a><span class="lineno">   19</span><span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a id="l00020" name="l00020"></a><span class="lineno">   20</span><span class="comment">//</span></div>
<div class="line"><a id="l00021" name="l00021"></a><span class="lineno">   21</span><span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a id="l00022" name="l00022"></a><span class="lineno">   22</span><span class="comment">//</span></div>
<div class="line"><a id="l00024" name="l00024"></a><span class="lineno">   24</span><span class="comment"></span> </div>
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_UDPSOCKET_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_UDPSOCKET_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="comment"></span><span class="preprocessor">#include &lt;SFML/Network/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;SFML/Network/Socket.hpp&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span><span class="preprocessor">#include &lt;SFML/Network/IpAddress.hpp&gt;</span></div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span><span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span> </div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span> </div>
<div class="line"><a id="l00037" name="l00037"></a><span class="lineno">   37</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00038" name="l00038"></a><span class="lineno">   38</span>{</div>
<div class="line"><a id="l00039" name="l00039"></a><span class="lineno">   39</span><span class="keyword">class </span>Packet;</div>
<div class="line"><a id="l00040" name="l00040"></a><span class="lineno">   40</span> </div>
<div class="line"><a id="l00045" name="l00045"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php">   45</a></span><span class="keyword">class </span>SFML_NETWORK_API <a class="code hl_class" href="classsf_1_1UdpSocket.php">UdpSocket</a> : <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1Socket.php">Socket</a></div>
<div class="line"><a id="l00046" name="l00046"></a><span class="lineno">   46</span>{</div>
<div class="line"><a id="l00047" name="l00047"></a><span class="lineno">   47</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00048" name="l00048"></a><span class="lineno">   48</span> </div>
<div class="line"><a id="l00050" name="l00050"></a><span class="lineno">   50</span>    <span class="comment">// Constants</span></div>
<div class="line"><a id="l00052" name="l00052"></a><span class="lineno">   52</span><span class="comment"></span>    <span class="keyword">enum</span></div>
<div class="line"><a id="l00053" name="l00053"></a><span class="lineno">   53</span>    {</div>
<div class="line"><a id="l00054" name="l00054"></a><span class="lineno">   54</span>        MaxDatagramSize = 65507 </div>
<div class="line"><a id="l00055" name="l00055"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php#a8ad087820b1ae07267858212f3d0fac5a728a7d33027bee0d65f70f964dd9c9eb">   55</a></span>    };</div>
<div class="line"><a id="l00056" name="l00056"></a><span class="lineno">   56</span> </div>
<div class="line"><a id="l00061" name="l00061"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php#abb10725e26dee9d3a8165fe87ffb71bb">   61</a></span>    <a class="code hl_function" href="classsf_1_1UdpSocket.php#abb10725e26dee9d3a8165fe87ffb71bb">UdpSocket</a>();</div>
<div class="line"><a id="l00062" name="l00062"></a><span class="lineno">   62</span> </div>
<div class="line"><a id="l00074" name="l00074"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php#a5c03644b3da34bb763bce93e758c938e">   74</a></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> <a class="code hl_function" href="classsf_1_1UdpSocket.php#a5c03644b3da34bb763bce93e758c938e">getLocalPort</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00075" name="l00075"></a><span class="lineno">   75</span> </div>
<div class="line"><a id="l00099" name="l00099"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php#ad764c3d06d90b4714dcc97a0d1647bcc">   99</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1UdpSocket.php#ad764c3d06d90b4714dcc97a0d1647bcc">bind</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> port, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1IpAddress.php">IpAddress</a>&amp; address = IpAddress::Any);</div>
<div class="line"><a id="l00100" name="l00100"></a><span class="lineno">  100</span> </div>
<div class="line"><a id="l00113" name="l00113"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php#a2c4abb8102a1bd31f51fcfe7f15427a3">  113</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1UdpSocket.php#a2c4abb8102a1bd31f51fcfe7f15427a3">unbind</a>();</div>
<div class="line"><a id="l00114" name="l00114"></a><span class="lineno">  114</span> </div>
<div class="line"><a id="l00132" name="l00132"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php#a664ab8f26f37c21cc4de1b847c2efcca">  132</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1UdpSocket.php#a664ab8f26f37c21cc4de1b847c2efcca">send</a>(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t size, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1IpAddress.php">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> remotePort);</div>
<div class="line"><a id="l00133" name="l00133"></a><span class="lineno">  133</span> </div>
<div class="line"><a id="l00155" name="l00155"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php#ade9ca0f7ed7919136917b0b997a9833a">  155</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1UdpSocket.php#ade9ca0f7ed7919136917b0b997a9833a">receive</a>(<span class="keywordtype">void</span>* data, std::size_t size, std::size_t&amp; received, <a class="code hl_class" href="classsf_1_1IpAddress.php">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span>&amp; remotePort);</div>
<div class="line"><a id="l00156" name="l00156"></a><span class="lineno">  156</span> </div>
<div class="line"><a id="l00173" name="l00173"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php#a48969a62c80d40fd74293a740798e435">  173</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1UdpSocket.php#a48969a62c80d40fd74293a740798e435">send</a>(<a class="code hl_class" href="classsf_1_1Packet.php">Packet</a>&amp; packet, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1IpAddress.php">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> remotePort);</div>
<div class="line"><a id="l00174" name="l00174"></a><span class="lineno">  174</span> </div>
<div class="line"><a id="l00190" name="l00190"></a><span class="lineno"><a class="line" href="classsf_1_1UdpSocket.php#afdd5c655d00c96222d5b477fc057a22b">  190</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1UdpSocket.php#afdd5c655d00c96222d5b477fc057a22b">receive</a>(<a class="code hl_class" href="classsf_1_1Packet.php">Packet</a>&amp; packet, <a class="code hl_class" href="classsf_1_1IpAddress.php">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span>&amp; remotePort);</div>
<div class="line"><a id="l00191" name="l00191"></a><span class="lineno">  191</span> </div>
<div class="line"><a id="l00192" name="l00192"></a><span class="lineno">  192</span><span class="keyword">private</span>:</div>
<div class="line"><a id="l00193" name="l00193"></a><span class="lineno">  193</span> </div>
<div class="line"><a id="l00195" name="l00195"></a><span class="lineno">  195</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00197" name="l00197"></a><span class="lineno">  197</span><span class="comment"></span>    std::vector&lt;char&gt; m_buffer; </div>
<div class="line"><a id="l00198" name="l00198"></a><span class="lineno">  198</span>};</div>
<div class="line"><a id="l00199" name="l00199"></a><span class="lineno">  199</span> </div>
<div class="line"><a id="l00200" name="l00200"></a><span class="lineno">  200</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00201" name="l00201"></a><span class="lineno">  201</span> </div>
<div class="line"><a id="l00202" name="l00202"></a><span class="lineno">  202</span> </div>
<div class="line"><a id="l00203" name="l00203"></a><span class="lineno">  203</span><span class="preprocessor">#endif </span><span class="comment">// SFML_UDPSOCKET_HPP</span></div>
<div class="line"><a id="l00204" name="l00204"></a><span class="lineno">  204</span> </div>
<div class="line"><a id="l00205" name="l00205"></a><span class="lineno">  205</span> </div>
<div class="ttc" id="aclasssf_1_1IpAddress_php"><div class="ttname"><a href="classsf_1_1IpAddress.php">sf::IpAddress</a></div><div class="ttdoc">Encapsulate an IPv4 network address.</div><div class="ttdef"><b>Definition:</b> <a href="IpAddress_8hpp_source.php#l00044">IpAddress.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1Packet_php"><div class="ttname"><a href="classsf_1_1Packet.php">sf::Packet</a></div><div class="ttdoc">Utility class to build blocks of data to transfer over the network.</div><div class="ttdef"><b>Definition:</b> <a href="Packet_8hpp_source.php#l00047">Packet.hpp:48</a></div></div>
<div class="ttc" id="aclasssf_1_1Socket_php"><div class="ttname"><a href="classsf_1_1Socket.php">sf::Socket</a></div><div class="ttdoc">Base class for all the socket types.</div><div class="ttdef"><b>Definition:</b> <a href="Socket_8hpp_source.php#l00045">Socket.hpp:46</a></div></div>
<div class="ttc" id="aclasssf_1_1Socket_php_a51bf0fd51057b98a10fbb866246176dc"><div class="ttname"><a href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">sf::Socket::Status</a></div><div class="ttdeci">Status</div><div class="ttdoc">Status codes that may be returned by socket functions.</div><div class="ttdef"><b>Definition:</b> <a href="Socket_8hpp_source.php#l00053">Socket.hpp:54</a></div></div>
<div class="ttc" id="aclasssf_1_1UdpSocket_php"><div class="ttname"><a href="classsf_1_1UdpSocket.php">sf::UdpSocket</a></div><div class="ttdoc">Specialized socket using the UDP protocol.</div><div class="ttdef"><b>Definition:</b> <a href="UdpSocket_8hpp_source.php#l00045">UdpSocket.hpp:46</a></div></div>
<div class="ttc" id="aclasssf_1_1UdpSocket_php_a2c4abb8102a1bd31f51fcfe7f15427a3"><div class="ttname"><a href="classsf_1_1UdpSocket.php#a2c4abb8102a1bd31f51fcfe7f15427a3">sf::UdpSocket::unbind</a></div><div class="ttdeci">void unbind()</div><div class="ttdoc">Unbind the socket from the local port to which it is bound.</div></div>
<div class="ttc" id="aclasssf_1_1UdpSocket_php_a48969a62c80d40fd74293a740798e435"><div class="ttname"><a href="classsf_1_1UdpSocket.php#a48969a62c80d40fd74293a740798e435">sf::UdpSocket::send</a></div><div class="ttdeci">Status send(Packet &amp;packet, const IpAddress &amp;remoteAddress, unsigned short remotePort)</div><div class="ttdoc">Send a formatted packet of data to a remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1UdpSocket_php_a5c03644b3da34bb763bce93e758c938e"><div class="ttname"><a href="classsf_1_1UdpSocket.php#a5c03644b3da34bb763bce93e758c938e">sf::UdpSocket::getLocalPort</a></div><div class="ttdeci">unsigned short getLocalPort() const</div><div class="ttdoc">Get the port to which the socket is bound locally.</div></div>
<div class="ttc" id="aclasssf_1_1UdpSocket_php_a664ab8f26f37c21cc4de1b847c2efcca"><div class="ttname"><a href="classsf_1_1UdpSocket.php#a664ab8f26f37c21cc4de1b847c2efcca">sf::UdpSocket::send</a></div><div class="ttdeci">Status send(const void *data, std::size_t size, const IpAddress &amp;remoteAddress, unsigned short remotePort)</div><div class="ttdoc">Send raw data to a remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1UdpSocket_php_abb10725e26dee9d3a8165fe87ffb71bb"><div class="ttname"><a href="classsf_1_1UdpSocket.php#abb10725e26dee9d3a8165fe87ffb71bb">sf::UdpSocket::UdpSocket</a></div><div class="ttdeci">UdpSocket()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1UdpSocket_php_ad764c3d06d90b4714dcc97a0d1647bcc"><div class="ttname"><a href="classsf_1_1UdpSocket.php#ad764c3d06d90b4714dcc97a0d1647bcc">sf::UdpSocket::bind</a></div><div class="ttdeci">Status bind(unsigned short port, const IpAddress &amp;address=IpAddress::Any)</div><div class="ttdoc">Bind the socket to a specific port.</div></div>
<div class="ttc" id="aclasssf_1_1UdpSocket_php_ade9ca0f7ed7919136917b0b997a9833a"><div class="ttname"><a href="classsf_1_1UdpSocket.php#ade9ca0f7ed7919136917b0b997a9833a">sf::UdpSocket::receive</a></div><div class="ttdeci">Status receive(void *data, std::size_t size, std::size_t &amp;received, IpAddress &amp;remoteAddress, unsigned short &amp;remotePort)</div><div class="ttdoc">Receive raw data from a remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1UdpSocket_php_afdd5c655d00c96222d5b477fc057a22b"><div class="ttname"><a href="classsf_1_1UdpSocket.php#afdd5c655d00c96222d5b477fc057a22b">sf::UdpSocket::receive</a></div><div class="ttdeci">Status receive(Packet &amp;packet, IpAddress &amp;remoteAddress, unsigned short &amp;remotePort)</div><div class="ttdoc">Receive a formatted packet of data from a remote peer.</div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>