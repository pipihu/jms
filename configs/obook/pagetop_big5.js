document.write('<div align="center">�I���C��<select name=bcolor id=bcolor onchange="javascript:document.bgColor=this.options[this.selectedIndex].value;">			  <option style="background-color: #f0f0f0" value="#f0f0f0">�q�{</option>			  <option style="background-color: #ffffff" value="#ffffff">�զ�</option>              <option style="background-color: #e4ebf1" value="#e4ebf1">�H��</option>			  <option style="background-color: #e6f3ff" value="#e6f3ff">�Ŧ�</option>               <option style="background-color: #eeeeee" value="#eeeeee">�H��</option>              <option style="background-color: #eaeaea" value="#eaeaea">�Ǧ�</option>                <option style="background-color: #e4e1d8" value="#e4e1d8">�`��</option>              <option style="background-color: #e6e6e6" value="#e6e6e6">�t��</option>              <option style="background-color: #eefaee" value="#eefaee">���</option>              <option style="background-color: #ffffed" value="#ffffed">����</option>              </select>			  �r���C��<select name=txtcolor id=txtcolor onchange="javascript:chaptercontent.style.color=this.options[this.selectedIndex].value;"> 			  <option value="#000000">�¦�</option>              <option value="#ff0000">����</option>              <option value="#006600">���</option>              <option value="#0000ff">�Ŧ�</option>              <option value="#660000">�Ħ�</option>			  </select>              �r��j�p<select name=fonttype id=fonttype onchange="javascript:chaptercontent.style.cssText=this.options[this.selectedIndex].value+\';line-height: 150%\';chaptercontent.style.color=txtcolor.options[txtcolor.selectedIndex].value;"> 			  <option value={font-size:12px;} >�p��</option> 			  <option value={font-size:14px;} >���p</option> 			  <option value={font-size:16px;} >����</option>			  <option value={font-size:18px;} >���j</option>			  <option value={font-size:24px;} >�j��</option>			  </select>            �ƹ������u��<input name=scrollspeed id=scrollspeed onchange="javascript:setSpeed();" size=2 value=5>            (1-10�A1�̺C�A10�̧֡^             <input name=saveset id=saveset onclick="javascript:saveSet();" type=button value=�O�s�]�m><br /><br /></div>');