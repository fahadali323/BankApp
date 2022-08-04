# Project Name: Simple Bank 
## Project Summary: TThis project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.
## Github Link: [https://github.com/fahadali323/IT202-450/tree/prod/public_html/Project](https://github.com/fahadali323/IT202-450/tree/prod/public_html/Project)
## Project Board Link: 
## Website Link: [https://fa376-prod.herokuapp.com/Project/login.php](https://fa376-prod.herokuapp.com/Project/login.php)
## Your Name: Fahad Ali 

<!-- Line item / Feature template (use this for each bullet point) -- DO NOT DELETE THIS SECTION


- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  Link to related .md file: [Link Name](link url)

 End Line item / Feature Template -- DO NOT DELETE THIS SECTION --> 
 
 
### Proposal Checklist and Evidence

- Milestone 1
  - [x] \(07/05/2022 of completion) User will be able to register a new account
      -  https://github.com/fahadali323/IT202-450/pull/36
  - [x] \(07/05/2022 of completion) User will be able to login to their account (given they enter the correct credentials)
      -  https://github.com/fahadali323/IT202-450/pull/36
  - [x] \(07/05/2022  of completion) User will be able to logout
      -  https://github.com/fahadali323/IT202-450/pull/36
  - [x] \(07/05/2022  of completion) Basic security rules implemented
      -  https://github.com/fahadali323/IT202-450/pull/36
  - [x] \(07/05/2022  of completion) Basic Roles implemented
      -  https://github.com/fahadali323/IT202-450/pull/36
  - [x] \(07/05/2022  of completion) Site should have basic styles/theme applied; everything should be styled
      -  https://github.com/fahadali323/IT202-450/pull/36
  - [x] \(07/05/2022  of completion) Any output messages/errors should be “user friendly”
      -  https://github.com/fahadali323/IT202-450/pull/36
  - [x] \(07/05/2022  of completion) User will be able to see their profile
      -  https://github.com/fahadali323/IT202-450/pull/36
  - [x] \(07/05/2022  of completion) User will be able to edit their profile
      -  https://github.com/fahadali323/IT202-450/pull/36  
- Milestone 2
   - [x] \(07/06/2022 of completion) Create the Accounts table (id, account_number [unique, always 12 characters, user_id, balance (default 0), account_type, created, modified)
      -  https://github.com/fahadali323/IT202-450/pull/44 <br>
      ![image](https://user-images.githubusercontent.com/106360996/177632433-e026eb35-451b-4216-9e64-b192576e682c.png)
  - [x] \(07/06/2022 of completion) Project setup steps:
      -  https://github.com/fahadali323/IT202-450/pull/53 
    - [x] \(07/06/2022 of completion) Create a system user if they don’t exist (this will never be logged into, it’s just to keep things working per system requirements)
      - https://github.com/fahadali323/IT202-450/pull/53 <br>
      ![image](https://user-images.githubusercontent.com/106360996/177639344-997bbd85-8286-4904-9a81-80a764d7c05b.png)
    - [x] \(07/06/2022 of completion) Create a world account in the Accounts table created below (if it doesn’t exist)
      -  https://github.com/fahadali323/IT202-450/pull/53 <br>
      ![image](https://user-images.githubusercontent.com/106360996/177639759-8c7c44f1-3070-4397-a695-6e9a8fa36f15.png)
  - [x] \(07/06/2022 of completion) Create the Transactions table (see reference at end of document)
      -  https://github.com/fahadali323/IT202-450/pull/57 <br>
      ![image](https://user-images.githubusercontent.com/106360996/177643432-d7db8088-70fb-4594-a016-0a154c544903.png)
  - [x] \(07/06/2022 of completion) Dashboard page
      -  https://github.com/fahadali323/IT202-450/pull/58 <br>
      ![image](https://user-images.githubusercontent.com/106360996/177677267-3743054f-1ae8-40e2-9f6a-4e7ddaff6e61.png)
  - [x] \(07/10/2022  of completion) User will be able to create a checking account
      - https://github.com/fahadali323/IT202-450/pull/63 <br>
    - [x] \(07/10/2022  of completion) System will generate a unique 12 digit account number
      - https://github.com/fahadali323/IT202-450/pull/63 <br>
      ![image](https://user-images.githubusercontent.com/106360996/178170929-d6b1e70c-8088-4f70-9f0e-a5d24610ca9c.png)
    - [x] \(07/10/2022  of completion) System will associate the account to the user / Account type will be set as checking
      - https://github.com/fahadali323/IT202-450/pull/63 <br>
      ![image](https://user-images.githubusercontent.com/106360996/178171128-245eed79-77c1-4fea-899b-60837a5bb161.png)
    - [x] \(07/10/2022 of completion) Will require a minimum deposit of $5 (from the world account) / User friendly messages
      - https://github.com/fahadali323/IT202-450/pull/63 <br>
      ![image](https://user-images.githubusercontent.com/106360996/178171196-aa355e79-ae55-4671-b595-d96fb8c2b306.png)
  - [x] \(07/10/2022 of completion) User will be able to list their accounts
      - https://github.com/fahadali323/IT202-450/pull/64
    - [x] \(07/10/2022 of completion) Limit results to 5 for now/Show account number, account type, modified, and balance
        -https://github.com/fahadali323/IT202-450/pull/64 <br>
        ![image](https://user-images.githubusercontent.com/106360996/178178325-9482f5b4-41d4-4a6f-b626-47ed601cace0.png)
  - [x] \(07/13/2022 of completion) User will be able to click an account for more information (a.k.a Transaction History page) 
      - https://github.com/fahadali323/IT202-450/pull/67
    - [x] \(07/13/2022 of completion) Show account number, account type, balance, opened/created date / Show transaction history (from Transactions table)
      -https://github.com/fahadali323/IT202-450/pull/67 <br>
      ![image](https://user-images.githubusercontent.com/106360996/178865066-7b8985e4-7fe9-4e71-b01f-541e8b5a7cfd.png)
  - [x] \(07/13/2022 of completion) User will be able to deposit/withdraw from their account(s)
      - https://github.com/fahadali323/IT202-450/pull/68 <br>
    - [x] \(07/13/2022 of completion) Form should have a dropdown of their accounts to pick from / World account should not be in the dropdown/ Form should have a field to enter a positive numeric value / For now, allow any deposit value (0 - inf) / Form should allow the user to record a memo for the transaction
      -https://github.com/fahadali323/IT202-450/pull/68 <br>
      ![image](https://user-images.githubusercontent.com/106360996/178867079-19067229-de8b-4c04-b9fb-e960a29222d5.png) <br>
      ![image](https://user-images.githubusercontent.com/106360996/178867274-ed492e52-91b6-49db-b2ac-cdcb7dddd01b.png)
    - [x] \(07/13/2022 of completion) For withdraw, add a check to make sure they can’t withdraw more money than the account has / Show appropriate user-friendly error messages
      -https://github.com/fahadali323/IT202-450/pull/68 <br>
      ![image](https://user-images.githubusercontent.com/106360996/178867396-91c0926c-e5a9-4154-b8ed-4312ee2967df.png)
    - [x] \(07/13/2022 of completion) Each transaction is recorded as a transaction pair in the Transaction table per the details below and at the end of the document
      -https://github.com/fahadali323/IT202-450/pull/68 <br>
      ![image](https://user-images.githubusercontent.com/106360996/178867628-8c674efd-0614-4d91-a026-3b6072a97feb.png)
- Milestone 3
- [x] \(07/23/2022 of completion) User will be able to transfer between their accounts
    - https://github.com/fahadali323/IT202-450/pull/77 <br> 
  - [x] \(07/23/2022  of completion) Clearly label this activity with a heading showing “Internal Transfer”
    - https://github.com/fahadali323/IT202-450/pull/77 <br> 
    ![image](https://user-images.githubusercontent.com/106360996/180613219-1d1b9211-6edc-4c84-9f51-8a5836f80339.png)
  - [x] \(07/23/2022  of completion) Form should include a dropdown for account_src and a dropdown for account_dest (only accounts the user owns; no world account)
    - https://github.com/fahadali323/IT202-450/pull/77 <br>  
    ![image](https://user-images.githubusercontent.com/106360996/180613278-34ecbbf5-3273-40cf-a80b-e19426488b2d.png) <br>
    ![image](https://user-images.githubusercontent.com/106360996/180613315-5ccf2ac1-1d8e-4fdf-96e1-95bd3ac37f84.png)
  - [x] \(07/23/2022  of completion) Form should include a field for a positive numeric value
     - https://github.com/fahadali323/IT202-450/pull/77 <br>  
      ![image](https://user-images.githubusercontent.com/106360996/180613340-8879bd35-8710-4316-8742-3fa96f909001.png)
  - [x] \(07/23/2022  of completion) System shouldn’t allow the user to transfer more funds than what’s available in account_src
      - https://github.com/fahadali323/IT202-450/pull/77 <br>  
      ![image](https://user-images.githubusercontent.com/106360996/180613451-cf5f91a2-89d8-430d-8aa4-e43fda2990bc.png)
  - [x] \(07/23/2022  of completion) Form should allow the user to record a memo for the transaction
    - https://github.com/fahadali323/IT202-450/pull/77 <br>  
    ![image](https://user-images.githubusercontent.com/106360996/180614425-3825878c-f837-463e-808f-be172adae6c4.png)  
  - [x] \(07/23/2022  of completion) Show appropriate user-friendly error messages / Show user-friendly success messages
    - https://github.com/fahadali323/IT202-450/pull/77 <br>  
    ![image](https://user-images.githubusercontent.com/106360996/180614480-a8606ca5-2149-4b59-9e1c-62c2c00a77f2.png) <br>
    ![image](https://user-images.githubusercontent.com/106360996/180614520-5d1a7222-bbd6-42a6-b9a5-220bc959b5c8.png) <br>
    ![image](https://user-images.githubusercontent.com/106360996/180614499-e011fe02-09b0-4a12-8db8-7bfc3d32de77.png)
- [x] \(mm/dd/yyyy of completion) Transaction History page (Same rules as the previous Milestone plus the below)
    - https://github.com/fahadali323/IT202-450/pull/78 <br>
    ![image](https://user-images.githubusercontent.com/106360996/180620998-ed297309-640b-40e9-ba1a-7920b25cc2fa.png)
  - [x] \(07/23/2022  of completion) User will be able to filter transactions between two dates
    - https://github.com/fahadali323/IT202-450/pull/78 <br>
    ![image](https://user-images.githubusercontent.com/106360996/180621025-948686f7-bc7c-4cd8-8f88-85bc8da7c078.png)
  - [x] \(07/23/2022  of completion) User will be able to filter transactions by type (deposit, withdraw, transfer)<br> 
    - (Deposit) <br>
    ![image](https://user-images.githubusercontent.com/106360996/180621102-9cdaf9ec-aa9c-4823-ab8a-13a554379df8.png)
    - (Withdraw) <br>
    ![image](https://user-images.githubusercontent.com/106360996/180621138-8357bb38-edb5-4a6a-8d78-6edaf4fa507d.png)
    - (Transfer) <br> 
    ![image](https://user-images.githubusercontent.com/106360996/180621025-948686f7-bc7c-4cd8-8f88-85bc8da7c078.png)
  - [x] \(07/23/2022 of completion) Transactions should paginate results after the initial 10
    - ![image](https://user-images.githubusercontent.com/106360996/180621224-50c7e0a1-af1b-44bf-9fc9-7c0e8f415519.png) <br>
    ! (Second Page) <br> ![image](https://user-images.githubusercontent.com/106360996/180621232-495ca2dc-99ea-4f3f-bd4e-b96e79a8ec83.png)
- [x] \(07/24/2022 of completion) User’s profile page should record and show First and Last name
      - <br> https://github.com/fahadali323/IT202-450/pull/79 <br>
      ![image](https://user-images.githubusercontent.com/106360996/180659216-abbf46e2-1d91-441d-84b4-4b56505a37b5.png)
  - [x] \(07/24/2022 of completion) This will require an Alter Table statement for the Users table to include two new fields with default values
    -  https://github.com/fahadali323/IT202-450/pull/79 <br>
    ![image](https://user-images.githubusercontent.com/106360996/180659248-faf5bedf-85f5-4852-92b8-596ad5749a85.png)
- [x] \(07/24/2022  of completion) User will be able to transfer funds to another user’s account
  - https://github.com/fahadali323/IT202-450/pull/80
  - [x] \(07/24/2022  of completion) Form should include a dropdown of the current user’s accounts (as AccountSrc) / Form should include a field for the destination user’s last name / Form should include a field for the last 4 digits of the destination user’s account number (to lookup AccountDest) / Form should include a field for a positive numerical value Form should allow the user to record a memo for the transaction
    - https://github.com/fahadali323/IT202-450/pull/80 <br>![image](https://user-images.githubusercontent.com/106360996/180660224-7de5d86e-a337-443b-9791-899daa341992.png)
  - [x] \(07/24/2022 of completion) System shouldn’t let the user transfer more than the balance of their account
    -  https://github.com/fahadali323/IT202-450/pull/80 <br> ![image](https://user-images.githubusercontent.com/106360996/180660289-2dfce218-94d6-49e9-a4ef-1bd963bb7187.png)
  - [x] \(07/24/2022 of completion) System will lookup appropriate account based on destination user’s last name and the last 4 digits of the account number
    -  https://github.com/fahadali323/IT202-450/pull/80 <br>  ![image](https://user-images.githubusercontent.com/106360996/180660409-44675219-7199-4229-b655-b77f9d8de184.png)
  - [x] \(07/24/2022 of completion) Show appropriate user-friendly error messages/ Show user-friendly success messages
    - https://github.com/fahadali323/IT202-450/pull/80 <br>   ![image](https://user-images.githubusercontent.com/106360996/180660461-5972d1c2-0076-477d-9999-f02b46db6762.png)
  - [x] \(07/24/2022 of completion) Transaction will be recorded with the type as “ext-transfer”/ Each transaction is recorded as a transaction pair in the Transaction table
    - https://github.com/fahadali323/IT202-450/pull/80 <br>   ![image](https://user-images.githubusercontent.com/106360996/180660483-edae7be0-0e3a-48ba-82c6-0909bc99814d.png)
- Milestone 4
  - [x] \(08/1/2021 of completion) User can set their profile to be public or private (will need another column in Users table)
    -  https://github.com/fahadali323/IT202-450/pull/93 <br> ![image](https://user-images.githubusercontent.com/106360996/182277665-cc7ae63f-54f1-4e23-81c2-946262b06652.png)
  - [x] \(08/02/2022 of completion) Create a table for System Properties 
    -  https://github.com/fahadali323/IT202-450/pull/94 <br> ![image](https://user-images.githubusercontent.com/106360996/182509696-216df5bf-462c-46b4-a4ab-65bd65c5fdfb.png) <br> ![image](https://user-images.githubusercontent.com/106360996/182509778-676e1e8b-df10-42e9-9586-431f2078db9b.png)
  - [x] \(08/02/2022 of completion) Alter the Accounts table to include a timestamp for last_apy_calc, default to current_timestamp, and a boolean for is_active default to true
    -  https://github.com/fahadali323/IT202-450/pull/94<br> ![image](https://user-images.githubusercontent.com/106360996/182509879-ab7c34bf-4154-4db4-894f-9e0e402ababd.png)
  - [x] \(08/04/2022 of completion) User will be able open a savings account
    -https://github.com/fahadali323/IT202-450/pull/95 <br> ![image](https://user-images.githubusercontent.com/106360996/182893699-0b730c39-d62d-439e-911d-b217c420c50e.png)
      - [x] \(08/04/2022 of completion) System will generate a 12 digit/character account number per the existing rules (see Checking Account above) / System will associate the account to the user / Account type will be set as savings 
      - https://github.com/fahadali323/IT202-450/pull/95 <br> ![image](https://user-images.githubusercontent.com/106360996/182893699-0b730c39-d62d-439e-911d-b217c420c50e.png)
      - [x] \(08/04/2022 of completion)Will require a minimum deposit of $5 (from the world account) 
      -https://github.com/fahadali323/IT202-450/pull/95 <br> ![image](https://user-images.githubusercontent.com/106360996/182893947-b40d7c05-2a8d-4ba4-8593-84f2a424b519.png)
  - [x] \(08/04/2022 of completion) User will be able to take out a loan
    -  https://github.com/fahadali323/IT202-450/pull/96 <br> ![image](https://user-images.githubusercontent.com/106360996/182899499-97f135f5-802b-4b3d-ab14-154104713021.png)
  - [x] \(08/04/2022 of completion) Listing accounts and/or viewing Account Details should show any applicable APY or “-” if none is set for the particular account
    - https://github.com/fahadali323/IT202-450/pull/97 <br> ![image](https://user-images.githubusercontent.com/106360996/182902356-8356900c-ef9e-48d7-91ce-aa6799e9ed36.png)
  - [ ] \(mm/dd/yyyy of completion) User will be able to close an account
    -  Link to related .md file: [Link Name](link url)
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file per the template
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone# branch as the source to branch from and to merge into)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented (these will be used to populate the related .md files for each milestone, forgetting to capture this will give you more work later on)
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this branch is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed (be sure it doesn't break anything in prod)
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board