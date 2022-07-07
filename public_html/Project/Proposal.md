# Project Name: Simple Bank 
## Project Summary: TThis project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.
## Github Link: [https://github.com/fahadali323/IT202-450/tree/prod/public_html/Project](https://github.com/fahadali323/IT202-450/tree/prod/public_html/Project)
## Project Board Link: 
## Website Link: [https://fa376-prod.herokuapp.com/Project](https://fa376-prod.herokuapp.com/Project)
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
  - [ ] \(mm/dd/yyyy of completion) User will be able to create a checking account
      -  Link to related .md file: [Link Name](link url)
    - [ ] \(mm/dd/yyyy of completion) System will generate a unique 12 digit account number
      -  Link to related .md file: [Link Name](link url)
    - [ ] \(mm/dd/yyyy of completion) System will associate the account to the user / Account type will be set as checking
      -  Link to related .md file: [Link Name](link url)
    - [ ] \(mm/dd/yyyy of completion) Will require a minimum deposit of $5 (from the world account) / User friendly messages
      -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) User will be able to list their accounts
      -  Link to related .md file: [Link Name](link url)
    - [ ] \(mm/dd/yyyy of completion) Limit results to 5 for now/Show account number, account type, modified, and balance
        -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) User will be able to click an account for more information (a.k.a Transaction History page) 
      -  Link to related .md file: [Link Name](link url)
    - [ ] \(mm/dd/yyyy of completion) Show account number, account type, balance, opened/created date / Show transaction history (from Transactions table)
      -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) User will be able to deposit/withdraw from their account(s)
      -  Link to related .md file: [Link Name](link url)
    - [ ] \(mm/dd/yyyy of completion) Form should have a dropdown of their accounts to pick from / World account should not be in the dropdown/ Form should have a field to enter a positive numeric value / For now, allow any deposit value (0 - inf) / Form should allow the user to record a memo for the transaction
      -  Link to related .md file: [Link Name](link url)
    - [ ] \(mm/dd/yyyy of completion) For withdraw, add a check to make sure they can’t withdraw more money than the account has / Show appropriate user-friendly error messages
      -  Link to related .md file: [Link Name](link url)
    - [ ] \(mm/dd/yyyy of completion) Each transaction is recorded as a transaction pair in the Transaction table per the details below and at the end of the document
      -  Link to related .md file: [Link Name](link url)
- Milestone 3
- [ ] \(mm/dd/yyyy of completion) User will be able to transfer between their accounts
  -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) Form should include a dropdown for account_src and a dropdown for account_dest (only accounts the user owns; no world account)
    -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) Form should include a field for a positive numeric value
    -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) System shouldn’t allow the user to transfer more funds than what’s available in account_src
    -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) Form should allow the user to record a memo for the transaction
    -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) Each transaction is recorded as a transaction pair in the Transaction table
    -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) Show appropriate user-friendly error messages / Show user-friendly success messages
  -  Link to related .md file: [Link Name](link url)
- [ ] \(mm/dd/yyyy of completion) Transaction History page (Same rules as the previous Milestone plus the below)
  -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) User will be able to filter transactions between two dates
    -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) User will be able to filter transactions by type (deposit, withdraw, transfer)
    -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) Transactions should paginate results after the initial 10
    -  Link to related .md file: [Link Name](link url)
- [ ] \(mm/dd/yyyy of completion) User’s profile page should record and show First and Last name
  -  Link to related .md file: [Link Name](link url)
- [ ] \(mm/dd/yyyy of completion) User will be able to transfer funds to another user’s account
  -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) Form should include a dropdown of the current user’s accounts (as AccountSrc) / Form should include a field for the destination user’s last name / Form should include a field for the last 4 digits of the destination user’s account number (to lookup AccountDest) / Form should include a field for a positive numerical value Form should allow the user to record a memo for the transaction
    -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) System shouldn’t let the user transfer more than the balance of their account
    -  Link to related .md file: [Link Name](link url)
  - [ ] \(mm/dd/yyyy of completion) System will lookup appropriate account based on destination user’s last name and the last 4 digits of the account number
    -  Link to related .md file: [Link Name](link url)  
  - [ ] \(mm/dd/yyyy of completion) Show appropriate user-friendly error messages/ Show user-friendly success messages
    -  Link to related .md file: [Link Name](link url)  
  - [ ] \(mm/dd/yyyy of completion) Transaction will be recorded with the type as “ext-transfer”/ Each transaction is recorded as a transaction pair in the Transaction table
    -  Link to related .md file: [Link Name](link url)    
- Milestone 4
- [ ] \(mm/dd/yyyy of completion) 
  -  Link to related .md file: [Link Name](link url)
- [ ] \(mm/dd/yyyy of completion) 
  -  Link to related .md file: [Link Name](link url)
- [ ] \(mm/dd/yyyy of completion) 
  -  Link to related .md file: [Link Name](link url)
- [ ] \(mm/dd/yyyy of completion) 
  -  Link to related .md file: [Link Name](link url)
- [ ] \(mm/dd/yyyy of completion) 
  -  Link to related .md file: [Link Name](link url)
- [ ] \(mm/dd/yyyy of completion) 
  -  Link to related .md file: [Link Name](link url)
- [ ] \(mm/dd/yyyy of completion) 
  -  Link to related .md file: [Link Name](link url)

  - 
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