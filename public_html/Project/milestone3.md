<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Fahad Ali(fa376)</td></tr>
<tr><td> <em>Generated: </em> 7/25/2022 4:03:57 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-3-bank-project/grade/fa376" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180857801-9e7dfa39-f1ea-4063-a5b0-a299fef8831b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>dd screenshot of transfer page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180857854-eaded5fc-90aa-4c64-83b2-94260076ce49.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing dropdown values<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180857921-706c5f6c-1175-4116-a2ef-7b9e52ec77a3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can&#39;t transfer more funds than they have<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180863491-3b1a4900-0f33-4fff-997f-74c07e47455f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can&#39;t transfer to the same account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180863535-417f6792-4a09-4ca0-bc41-a1b7fb129e94.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing you can&#39;t transfer an negative balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180846162-810c0d47-1de4-431d-80fc-b6506ce87134.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the generated transaction history from the db (look at heroku transfer)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180863652-b19083d4-cada-4cea-9c1c-98041214f127.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> screenshot of the Accounts table showing both affected accounts<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180863711-67fffb4a-bfaf-4504-a663-7fe2583e8768.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>account 1 (Transfer from)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180864002-ffb5f846-e42a-4e53-8dda-a73d8777f5c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>account 2 (transfer into)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>-When transfer button is clicked a new page gets generated called transfer.php.<div>-In transfer.php,<br>we display the required content onto the page, Source, destination, transfer amount and<br>memo and each items has a form under it that allows the user<br>to select from where to transfer from and where to transfer into for<br>source and destination. For transfer amount and memo the user has the ability<br>to type a numeric positive value for the transfer amount not exceeding funds<br>available in the account they are transferring and a memo which they can<br>attach to the transfer transaction .</div><div>- We then use an <span style="font-family: Consolas,<br>&quot;Courier New&quot;, monospace; white-space: pre; color: rgb(175, 0, 219);">if</span><span style="font-family: Consolas, &quot;Courier New&quot;,<br>monospace; white-space: pre;">(</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(121, 94,<br>38);">isset</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;">(</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(0, 16, 128);">$_POST</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;">[</span>&lt;span<br>style=&quot;font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(163, 21, 21);&quot;&gt;&quot;save&quot;</span><span style="font-family: Consolas,<br>&quot;Courier New&quot;, monospace; white-space: pre;">])) which checks for amount, from, into, memo and<br>fromBal gather from the </span></div><div><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;">transactions database.<br>If the values are true that means that the variable exists </span></div><div><span style="font-family:<br>Consolas, &quot;Courier New&quot;, monospace; white-space: pre;">and the value is not null.</span></div><div><span style="font-family: Consolas,<br>&quot;Courier New&quot;, monospace; white-space: pre;">Otherwise, it returns false. We also use a query<br> where we select  amount, account_type, </span></div><div><span style="font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre;">and balance from bank_account so that we can set the transaction to<br>the correct account. </span></div><div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/81">https://github.com/fahadali323/IT202-450/pull/81</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project/transfer.php">https://fa376-prod.herokuapp.com/Project/transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180849027-b90fa7e2-93b8-4e5d-b548-68aee47bf0fd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transaction accounts  1 and 2 <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180849265-311bb52e-b273-4b6c-ba2d-c02156332fcd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transaction accounts  1 <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180849299-0db6788d-c83d-40a2-b8c0-bb5a949e555e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transaction accounts  2 <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180849494-197683ca-a81f-4fc7-8b3f-b3a47ea64d23.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>pagination<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180849672-3486d9cf-1bc8-4515-8d27-7b22ee8b2502.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>filters <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180850028-c9d7a53c-b2e7-419e-afcc-c4906ce2de89.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>pagination look<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>In milestone3functions.php I have created a pagination filter where get we pass in<br>parameter newpage. then we set the newpage to get[&quot;page&quot;] and in the function<br>we return a generated url query string. Then inside the transactions page we<br>display the pagination by use div and set the pagination number to -1.<br>We disable the pagination based on whether or not if the pages are<br>less than -1.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/81">https://github.com/fahadali323/IT202-450/pull/81</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to Transaction History page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project/transfer.php">https://fa376-prod.herokuapp.com/Project/transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180850883-a4effb56-f71f-4e7e-95f3-64a6225c78d8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user&#39;s profile with the new fields<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/81">https://github.com/fahadali323/IT202-450/pull/81</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project/transfer.php">https://fa376-prod.herokuapp.com/Project/transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180864195-27c0307e-6a29-4344-b1b3-c538e7e077aa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> external transfer page with filled in data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180864274-01674fa1-1830-4f80-8749-f251a16ab7f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing user can&#39;t send more than they have<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180851470-75861d9b-edd8-4de0-b384-b598131e9565.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> code snippet that prevents this on the server-side<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180864353-1a29ea89-ad05-4fd7-b4f9-632e0a8acfa0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Message should clearly state this<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180864429-2c9659f4-585b-422b-adbf-1692013e1811.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> showing they can&#39;t send a negative amount<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180852160-e6c1e1df-b2c6-4fea-a121-bd27b4fa6ffc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the code snippet that prevents this on the server-side<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180864493-4721c4fa-fb61-4e00-969d-8aefedb10cbe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing message if a user doesn&#39;t exist and/or a destination account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180852375-98a220ab-a54a-4631-9cbf-222e7d90eaba.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Show the code snippet that prevents this on the server-side<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180864624-d4551d9d-1a1f-4055-875b-069d48098106.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>transactions table showing the recorded transfer<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180864624-d4551d9d-1a1f-4055-875b-069d48098106.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>account 1 (transfer from)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180863827-592983c9-80e7-4c89-9425-3de9ad57ec5a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>account 2 (transfer into)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180852759-3feae952-fe0c-41ae-81c8-e4de525a4989.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Should be from VS Code db extensions<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>We use&nbsp;<span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(175, 0, 219);">if</span>&lt;span<br>style=&quot;font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;&quot;&gt;(</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space:<br>pre; color: rgb(121, 94, 38);">isset</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;">(</span><span style="font-family:<br>Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(0, 16, 128);">$_POST</span><span style="font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre;">[</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(163,<br>21, 21);">&quot;save&quot;</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;">])) where we look for<br>accountfrom, account number, transfer type, and lastname from bank_accounts. We use an if</span><div>&lt;span<br>style=&quot;font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;&quot;&gt;and else stmt we check for the<br>correct name entered that matches regex. Then in the else stmt, we use<br>a last-name where we check in the db</span></div><div><font face="Consolas, Courier New, monospace"><span style="white-space:<br>pre;">whether or not an acccount with the given last name exists, if it<br>doesn&#39;t we flash a warning, if it does we move onto another else<br>stmt,where we </span></font></div><div><font face="Consolas, Courier New, monospace"><span style="white-space: pre;">fetch the account with the<br>inputted last_name. Then we use is the account is none, we flash a<br>warning that no such accounts exist, if they type the same account id</span></font></div><div>&lt;font<br>face=&quot;Consolas, Courier New, monospace&quot;&gt;<span style="white-space: pre;">we flash a warning stating that they must<br>choose two different accounts. If the amount is more than the funds available<br>in the account, we flash a warning</span></font></div><div><font face="Consolas, Courier New, monospace"><span style="white-space: pre;">stating<br>&quot;insufficient funds&quot;. If everything works accordingly we flash a success message. Then we<br>use a query to output the correct content to the page. </span></font></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/81">https://github.com/fahadali323/IT202-450/pull/81</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to external transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project/transfer.php">https://fa376-prod.herokuapp.com/Project/transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180854508-8a4c74dd-22ae-4c48-aa19-464597947efb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshots showing which issues are done/closed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180854665-b1af7a86-746b-44d3-8954-3f901c95f499.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues 1 and 2 done<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/180854693-d30adfcc-6f18-4143-aa64-758a40cbf399.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues 3 and 4 done <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-3-bank-project/grade/fa376" target="_blank">Grading</a></td></tr></table>