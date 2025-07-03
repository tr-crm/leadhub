import { Routes } from '@angular/router';
import { SignInComponent } from './sign-in/sign-in.component';
import { SignUpComponent } from './sign-up/sign-up.component';
import { ResetPwComponent } from './reset-pw/reset-pw.component';
import { NewPwComponent } from './new-pw/new-pw.component';
import { TwoFactorComponent } from './two-factor/two-factor.component';
import { LockScreenComponent } from './lock-screen/lock-screen.component';
import { SuccessMailComponent } from './success-mail/success-mail.component';
import { LoginPinComponent } from './login-pin/login-pin.component';
import { DeleteAccountComponent } from './delete-account/delete-account.component';

export const VERSION3_ROUTES: Routes = [
    {
        path: 'auth-3/sign-in',
        component: SignInComponent,
        data: { title: "Sign In" },
    },
    {
        path: 'auth-3/sign-up',
        component: SignUpComponent,
        data: { title: "Sign Up" },
    },
    {
        path: 'auth-3/reset-pw',
        component: ResetPwComponent,
        data: { title: "Reset Password" },
    },
    {
        path: 'auth-3/new-pw',
        component: NewPwComponent,
        data: { title: "New Password" },
    },
    {
        path: 'auth-3/two-factor',
        component: TwoFactorComponent,
        data: { title: "Two Factor" },
    },
    {
        path: 'auth-3/lock-screen',
        component: LockScreenComponent,
        data: { title: "Lock Screen" },
    },
    {
        path: 'auth-3/success-mail',
        component: SuccessMailComponent,
        data: { title: "Success Mail" },
    },
    {
        path: 'auth-3/login-pin',
        component: LoginPinComponent,
        data: { title: "Login with Pin" },
    },
    {
        path: 'auth-3/delete-account',
        component: DeleteAccountComponent,
        data: { title: "Delete Account" },
    },


];
