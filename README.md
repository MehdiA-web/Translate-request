# Translation Request Process

This project manages translation requests and handles the flow between the source process and target process. The flow consists of multiple roles: Requesters, Managers, and Translators.

## Overview

The translation request process consists of two main parts:
1. **Source Process**: Users submit translation requests which are reviewed by the manager.
2. **Target Process**: Translators provide the requested translation after the request is approved.

### Source Process Workflow

1. **Requester Submits Request**: A user submits a translation request.
2. **Manager Review**: 
   - If approved, the request is sent to translators.
   - If rejected, the process ends here.
3. **Assign to Translators**: Translators are assigned to the translation request.
4. **Upload Translation**: Translators complete the translation and upload the file.
5. **Payment and File Delivery**: The requester makes payment, and the translated file is delivered.

#### Source Process Diagram:

![Source Process](https://s8.uupload.ir/files/screenshot_(5)_pt9f.png)

### Cost and Time Approval Workflow

1. **Translators Submit Estimate**: Translators provide an estimate of the cost and time for the translation.
2. **Manager Review**:
   - If the cost or time needs revision, it is sent back to the translator.
   - If approved, the cost and time are confirmed.

#### Target Process Diagram:

![Target Process](https://s8.uupload.ir/files/screenshot_(7)_wds7.png)

### Roles

- **Requester**: Submits the translation request.
- **Manager**: Reviews requests and estimates and approves or rejects them.
- **Translators**: Provide translations and estimates for cost and time.

### Requirements

- ProcessMaker platform
- A manager role to review and approve translation requests.
- Translator role for handling the translation work.

### Installation

1. Import the process into ProcessMaker.
2. Set up roles for users, managers, and translators.
3. Ensure necessary permissions are in place for each role.

### License

This project is open-source. Feel free to modify and distribute as per the project’s license.

