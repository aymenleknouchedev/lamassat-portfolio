@extends('layouts.app')

@section('title', 'Dashboard')

@section('meta_description', 'View your dashboard with analytics, stats, and quick actions')

@section('meta_keywords', 'dashboard, analytics, stats, overview')

@section('body_class', 'layout-with-sidebar')

@section('useSidebar', '1')


@section('content')
    <div class="stats">
        <div class="stat-box">
            <div class="number">1,234</div>
            <div class="label">Total Views</div>
        </div>
        <div class="stat-box">
            <div class="number">5</div>
            <div class="label">Projects</div>
        </div>
        <div class="stat-box">
            <div class="number">{{ \Carbon\Carbon::now()->diffInDays(Auth::user()->created_at) }}</div>
            <div class="label">Days Joined</div>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
        <!-- Quick Actions -->
        <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h3 style="color: var(--blue); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                <i class="fas fa-lightning-bolt"></i> Quick Actions
            </h3>
            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <a href="/me"
                    style="background: var(--orange); color: white; padding: 0.75rem 1rem; border-radius: 4px; text-decoration: none; text-align: center; transition: transform 0.3s;">
                    <i class="fas fa-user"></i> Edit Profile
                </a>
                <a href="/projects"
                    style="background: var(--orange); color: white; padding: 0.75rem 1rem; border-radius: 4px; text-decoration: none; text-align: center; transition: transform 0.3s;">
                    <i class="fas fa-plus"></i> New Project
                </a>
                <a href="/contacts"
                    style="background: var(--orange); color: white; padding: 0.75rem 1rem; border-radius: 4px; text-decoration: none; text-align: center; transition: transform 0.3s;">
                    <i class="fas fa-address-book"></i> Add Contact
                </a>
                <a href="/social"
                    style="background: var(--orange); color: white; padding: 0.75rem 1rem; border-radius: 4px; text-decoration: none; text-align: center; transition: transform 0.3s;">
                    <i class="fas fa-share-alt"></i> Update Social
                </a>
            </div>
        </div>

        <!-- Statistics Overview -->
        <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h3 style="color: var(--blue); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                <i class="fas fa-chart-line"></i> Statistics Overview
            </h3>
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: bold;">Profile Views</span>
                        <span style="color: var(--blue); font-weight: bold;">1,234</span>
                    </div>
                    <div style="background: #e0e0e0; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--orange); height: 100%; width: 85%;"></div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: bold;">Projects Completed</span>
                        <span style="color: var(--blue); font-weight: bold;">5/10</span>
                    </div>
                    <div style="background: #e0e0e0; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--orange); height: 100%; width: 50%;"></div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: bold;">Profile Completion</span>
                        <span style="color: var(--blue); font-weight: bold;">100%</span>
                    </div>
                    <div style="background: #e0e0e0; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--orange); height: 100%; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
