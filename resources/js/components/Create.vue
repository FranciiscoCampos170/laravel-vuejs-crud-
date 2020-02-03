<template>
    <div class="column is-half is-offset-one-quarter" style="padding-top:5em">
        <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Create new User
                    </p>
                    <a href="/users/" class="card-header-icon">
                        <span class="icon">
                            <i class="fas fa-backspace" aria-hidden="true"></i>
                        </span>
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        <div class="field">
                            <label class="label">First Name</label>
                            <div class="control">
                                <input class="input" type="text">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Last Name</label>
                            <div class="control">
                                <input class="input" type="text">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="email">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Country</label>
                            <div class="control">
                                <div class="select">
                                <select>
                                    <option>----</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Company</label>
                            <div class="control">
                                <div class="select">
                                <select>
                                    <option>----</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="#" class="card-footer-item">Save</a>
                    <a href="#" class="card-footer-item">Cancel</a>
                </footer>
            </div>
    </div>
</template>
