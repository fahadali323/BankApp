<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Bank Project</td></tr>
<tr><td> <em>Student: </em> Fahad Ali(fa376)</td></tr>
<tr><td> <em>Generated: </em> 8/5/2022 6:50:18 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-4-bank-project/grade/fa376" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone4 branch</li><li>Create a new markdown file called milestone4.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone4.md</li><li>Add/commit/push the changes to Milestone4</li><li>PR Milestone4 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes</li><li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183157627-2d60292b-8108-487e-ab99-1f65a948f35c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> New column on the Users table (visibility)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183157674-b84f47ac-dbf0-4a05-891a-7fe4a1bf30ec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshot of updated profile edit view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183158661-b9c9f42b-1c5b-4ec1-982d-b596a3e8142c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshot of profile view view (ensure email isn&#39;t shown publicly)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/99">https://github.com/fahadali323/IT202-450/pull/99</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project//close.php">https://fa376-prod.herokuapp.com/Project//close.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>I used a visibility columns in the users table inside the database. When<br>a user selects public, the specific column which is visibility and the row<br>which is the user id will change to public. Likewise, if a user<br>selects private the exact column and row for this user will change from<br>public to private. I then used a function called&nbsp;<span style="font-family: Consolas, &quot;Courier New&quot;,<br>monospace; white-space: pre; color: rgb(0, 0, 255);">function</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space:<br>pre;"> </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(121, 94, 38);">get_visi</span>&lt;span<br>style=&quot;font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;&quot;&gt;(</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space:<br>pre; color: rgb(0, 16, 128);">$email</span><font face="Consolas, Courier New, monospace"><span style="white-space: pre;">) which selects<br>visibility from the users table, to return the result in this column either<br>private or public. Then inside the profile.php where the private and public</span></font><div><font face="Consolas,<br>Courier New, monospace"><span style="white-space: pre;">will be displayed to the users screen based on<br>what they selected.<br></span></font><div style="font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div><span style="color:<br>rgb(0, 0, 255);">function</span> <span style="color: rgb(121, 94, 38);">get_visi</span>(<span style="color: rgb(0, 16, 128);">$email)</span><br></div><div>{</div><div>&nbsp; &nbsp;<br><span style="color: #af00db;">if</span> (<span style="color: #795e26;">is_logged_in</span>()) {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #001080;">$query</span><br>= <span style="color: #a31515;">&quot;</span><span style="color: #0000ff;">SELECT</span><span style="color: #a31515;"> visibility </span><span style="color: #0000ff;">FROM</span><span style="color:<br>#a31515;"> Users </span><span style="color: #0000ff;">WHERE</span><span style="color: #a31515;"> email </span>=<span style="color: #a31515;"> :email </span>&lt;span<br>style=&quot;color: #0000ff;&quot;&gt;LIMIT</span><span style="color: #a31515;"> </span><span style="color: #098658;">1</span><span style="color: #a31515;">&quot;</span>;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;span<br>style=&quot;color: #001080;&quot;&gt;$db</span> = <span style="color: #795e26;">getDB</span>();</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #001080;">$stmt</span> =<br><span style="color: #001080;">$db</span>-&gt;<span style="color: #795e26;">prepare</span>(<span style="color: #001080;">$query</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #af00db;">try</span><br>{</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #001080;">$stmt</span>-&gt;<span style="color: #795e26;">execute</span>([<span style="color: #a31515;">&quot;:email&quot;</span><br>=&gt; <span style="color: #001080;">$email</span>]);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #001080;">$result</span> =<br><span style="color: #001080;">$stmt</span>-&gt;<span style="color: #795e26;">fetch</span>(<span style="color: #267f99;">PDO</span>::FETCH_ASSOC);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;span<br>style=&quot;color: #af00db;&quot;&gt;return</span> <span style="color: #001080;">$result</span>[<span style="color: #a31515;">&quot;visibility&quot;</span>];</div><div>&nbsp; &nbsp; &nbsp; &nbsp; } <span style="color:<br>#af00db;">catch</span> (<span style="color: #267f99;">PDOException</span> <span style="color: #001080;">$e</span>) {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br><span style="color: #795e26;">flash</span>(<span style="color: #a31515;">&quot;Technical error: &quot;</span> . <span style="color: #795e26;">var_export</span>(<span style="color: #001080;">$e</span>-&gt;&lt;span<br>style=&quot;color: #001080;&quot;&gt;errorInfo</span>, <span style="color: #0000ff;">true</span>), <span style="color: #a31515;">&quot;danger&quot;</span>);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; }</div><div>&nbsp; &nbsp;<br>}</div><div>}</div></div></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to open a savings account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the create account page for savings with the form filled in</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183159367-41807660-3975-474b-b2de-939c3e29ee1e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshot of the create account page for savings with the form filled<br>in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183159310-27ddc47f-be96-4abc-be53-18b032bc067c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshot of the create account page for savings with the form filled<br>in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the code that determines the APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183159965-758af085-c84a-4ffc-a8a9-835740a96979.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshot of the code that determines the APY<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183160021-36ab5f54-4626-488b-894c-e232b3104954.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshot of the code that determines the APY<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183160049-88a36486-cb57-42c0-b82e-e982a6b3a137.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshot of the code that determines the APY<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the related error and success messages when creating a savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183160264-33b598d3-a609-4d2e-b25c-e6d86972bde8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error message for savings account <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183160364-87a79352-77e0-4a3c-a822-a43517c39ecb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>success message for creating savings account <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) of the db showing the new savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183160620-b971fac1-dc35-4431-ba11-e2f094fba9fc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>SystemProperties table data related to savings account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183166461-f790de1e-9347-4a48-91d9-36445883e1b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the last_apy_calc column and the is_active column<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183167516-78cb3641-08e3-49fd-a7de-dcbc9f1f89fc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Should match the filled in one from Task 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/99">https://github.com/fahadali323/IT202-450/pull/99</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project//close.php">https://fa376-prod.herokuapp.com/Project//close.php</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the logic behind the APY value</td></tr>
<tr><td> <em>Response:</em> <p>I used a function called updated_apy() which uses different queries to gather information<br>stored in bank_accounts table and systems_properties table. Inside the bank_accounts, I am fetching<br>information about the users&nbsp;<span style="color: rgb(163, 21, 21); font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre;">account, ID, created, balance, last_apy_calc, is_active. Then from the systems_properties I am<br>fetching apy/value stored in the table. If the users selects a </span><div><span style="color:<br>rgb(163, 21, 21); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;">loan or a savings<br>account, the function will apply the apy to that account and at the<br>same time update the last_apy_calc which would populate the column and  row<br></span></div><div><span style="color: rgb(163, 21, 21); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;">where the<br>user id is stored with the time on when the user created a<br>loan.</span></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to take out a loan </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the form for opening a loan along with the system generated APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183196523-b2df9ff0-6eeb-4379-b0f5-e5b2d8731b8d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan APy Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183197623-be651ec6-a383-4fa6-ad80-0570e84556c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>with the system generated APY<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing the user's accounts that can be deposited into</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183198801-f1ddaba9-8d79-45c2-956d-25ea3b1444d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user&#39;s accounts that can be deposited into<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot from the db showing the loan account has a negative balance and the generated transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183200456-7fa9838a-6445-4d98-80d6-948eab7f9e75.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan is recorded as negative <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183201742-188bf90f-fcb1-43d8-9d83-1ac12f655102.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the SystemProperties table data related to loan account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183206437-c92fe380-5fcc-4bec-bea9-9a70a3a66ebb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Lasty_apy_calc date should be visible<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot from the User's account list page showing the loan displaying as a positive value</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183206740-c3a80794-a8c2-414d-9dc7-e607e224795b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add a screenshot from the User&#39;s account list page showing the loan displaying<br>as a positive<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the code logic for updating the loan's balance per the requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183208218-cad20973-1217-4b8b-b87c-814de7aae933.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the code logic for updating the loan&#39;s balance per the requirements<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183208597-ca3e8a10-5c08-43ec-8605-9a2d239ec600.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code logic page 2 <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183209194-538c058c-5386-4dc6-b5ba-f6e57533d780.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code logic page 3<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183209415-dd4d0976-1fbf-4fcd-b438-41814b78e404.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code logic page 4<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183209909-bc162c8a-a5ea-4341-abe4-fd0ba01c4676.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>display apy function<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot showing user can't transfer more money from a loan account (alternatively don't show loan accounts in the dropdown for transfer transactions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183213094-4f78f527-e143-40d4-82ca-f1564febc1a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>(alternatively don&#39;t show loan accounts in the dropdown for transfer transactions)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183213311-780a8f26-fc55-4fcd-8f8c-53e5edd03969.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan Account Number is last one <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add screenshots of any other errors and success</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183213826-d402b8b9-5258-4814-a6b8-7de89a8eb4e0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful loan account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183214124-75a46310-47d4-4e09-bf57-d338c2ae99a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success message <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183214295-9c243b22-781c-48f0-aa49-a88b475338d3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error taking out loan<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/99">https://github.com/fahadali323/IT202-450/pull/99</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to create/open loan page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project//close.php">https://fa376-prod.herokuapp.com/Project//close.php</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain the special code implementations for loans</td></tr>
<tr><td> <em>Response:</em> <p>In loan.php I used a query to fetch the apy from the systems_properties<br>table. Then I used a select to fetch account, account_type, balance, and is_active<br>from the users_table.&nbsp;<div>To apply the apy to the total account, the user enters<br>the total amount exceeding 500 that they used and store this inside variable<br>total. Then the total gets multiplyed by apy divided 100 plus the total<br>gives me the amount of apy to charge onto the account. I execute<br>this data into the users selected account where the user id and account<br>number matches in&nbsp; the database. If it does then the apy gets stored<br>into the database. If the id does not exist then the apy does<br>not get stored or if the account is inactive then the apy does<br>not get stored.&nbsp;<br><div><br></div></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Listing accounts should show applicable APY or - if none is set for a particular account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the account list showing a combination of checkings, savings, loans, etc</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183215156-aa894e3b-ad20-482d-9953-54d12e102765.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshot of the account list showing a combination of checkings, savings, loans,<br>etc<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/99">https://github.com/fahadali323/IT202-450/pull/99</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Account list page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project//user_accounts.php">https://fa376-prod.herokuapp.com/Project//user_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> User will be able to close an account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing validation that an account can't be closed if it has a balance (regular account and loan)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183215491-1ba707e3-22cd-441e-8b2e-a0f2ebeb2bf2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshot showing validation that an account can&#39;t be closed if it has<br>a balance (regular account and loan)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183215586-54d33f46-88a9-4d37-b6a3-940bed4b7ea3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successfully closed<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot from the DB showing a closed account as inactive</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183215827-fdd5ac42-3e42-40bb-a743-e3f09b4f8f16.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Add screenshot from the DB showing a closed account as inactive<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the various account list queries (in the code) showing the changes to use is_active</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183216128-3ff19a22-97df-4e2c-93f6-876373a7dcdf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Various queries used for active/inactive <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183216204-ddbceeae-ce51-4312-bf5d-e9ae538dfcdd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshots of the various account list queries (in the code) showing the<br>changes to use is_active<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183216276-81e4c711-9dc9-4f82-8132-edd61f690898.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Add screenshots of the various account list queries (in the code) showing the<br>changes to use is_active<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183216291-ef78a4b5-b0e0-4c35-a9c9-04c8fd02a933.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Various queries used for active/inactive <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/99">https://github.com/fahadali323/IT202-450/pull/99</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a link to the page where a user can close an account</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project//user_accounts.php">https://fa376-prod.herokuapp.com/Project//user_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183216551-976db43e-5c6e-446c-b80a-2b33bb858f23.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issues done/Closed <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183216583-007c0577-1c0f-4724-8bd2-aa873fbb5490.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issues done/Closed <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183216694-a41464a7-f6f2-44b7-953b-54ad2455aa83.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board page 1 <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183216717-b03c34ad-7c46-4ba7-9925-57d5a965f571.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board page 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/183216739-9f372053-1bf2-4f68-b23b-91f874c1d5a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board page 3<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-4-bank-project/grade/fa376" target="_blank">Grading</a></td></tr></table>